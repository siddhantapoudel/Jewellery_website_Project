<?php


  $uname = "admin";
  $pwd = "jaymuktinath";

  session_start();

  if(isset($_SESSION['uname']))
  {
    echo "<h1>Welcome ".$_SESSION['uname']."</h1>";

    echo "<br><a href='logout.php'><input type='button' value= 'logout' name= 'logout'></a>";
  }

  else
  {
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd)
    {
      $_SESSION['uname'] = $uname;

      echo "<script>location.href='admin.php'</script>";
    }
    else
    {
      echo "<script>alert('username or password incorrect')</script>";
      echo "<script>location.href='login.php'</script>";
    }
  }

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>

      .form-control-file, .form-control-range {
        display: block;
        width: 19%;
      }

      .container
      {
        margin-top: 10%;
        border: 1px solid black;
        border-radius: 10px;
      }
    </style>
  </head>
  <body>

    <?php



    function cwUpload($field_name = '', $target_folder = '', $file_name = '', $thumb = FALSE, $thumb_folder = '', $thumb_width = '', $thumb_height = ''){

        include 'dbConfig.php';
        //folder path setup
        $target_path = $target_folder;
        $thumb_path = $thumb_folder;

        //file name setup
        $filename_err = explode(".",$_FILES[$field_name]['name']);
        $filename_err_count = count($filename_err);
        $file_ext = $filename_err[$filename_err_count-1];
        if($file_name != ''){
            $fileName = $file_name.'.'.$file_ext;
        }else{
            $fileName = $_FILES[$field_name]['name'];
        }

        $insert = $db->query("INSERT into images_final (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
        if($insert){
            echo "The file ".$fileName. " has been uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        }

        //upload image path
        $upload_image = $target_path.basename($fileName);

        //upload image
        if(move_uploaded_file($_FILES[$field_name]['tmp_name'],$upload_image))
        {
            //thumbnail creation
            if($thumb == TRUE)
            {
                $thumbnail = $thumb_path.$fileName;
                list($width,$height) = getimagesize($upload_image);
                $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height);
                switch($file_ext){
                    case 'JPG':
                        $source = imagecreatefromjpeg($upload_image);
                        break;
                    case 'jpeg':
                        $source = imagecreatefromjpeg($upload_image);
                        break;

                    case 'png':
                        $source = imagecreatefrompng($upload_image);
                        break;
                    case 'gif':
                        $source = imagecreatefromgif($upload_image);
                        break;
                    default:
                        $source = imagecreatefromjpeg($upload_image);
                }

                imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
                switch($file_ext){
                    case 'JPG' || 'jpeg':
                        imagejpeg($thumb_create,$thumbnail,100);
                        break;
                    case 'png':
                        imagepng($thumb_create,$thumbnail,100);
                        break;

                    case 'gif':
                        imagegif($thumb_create,$thumbnail,100);
                        break;
                    default:
                        imagejpeg($thumb_create,$thumbnail,100);
                }

            }
            return $fileName;
        }
        else
        {
            return false;
        }


    }



    if(!empty($_FILES['image']['name'])){

        //call thumbnail creation function and store thumbnail name
        $upload_img = cwUpload('image','uploads/','',TRUE,'uploads/thumbs/','344','232');

        //full path of the thumbnail image
        $thumb_src = 'uploads/thumbs/'.$upload_img;

        //set success and error messages
        $message = $upload_img?"<span style='color:#008000;'>Image thumbnail have been created successfully.</span>":"<span style='color:#F00000;'>Some error occurred, please try again.</span>";

    }else{

        //if form is not submitted, below variable should be blank
        $thumb_src = '';
        $message = '';
    }



    ?>

    <div class="container">
      <h1 align="center">ADMIN PANEL</h1>
      <h4>Insert images here</h2>

      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1" align="center">Insert an Image to Upload To Gallery Page</label>
          <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" align="center"/>
          <input type="submit" name="submit" class="form-control-file" id="exampleFormControlFile1" value="Upload" style="margin-top: 10px; align="center";"/>
        </div>
      </form>
      <br>
      <h4>To Delete Some Images Click on the button below!<h5>
      <button onclick="location.href='delete_images.php';">To delete images</button>

    </div>

    <?php if($thumb_src != ''){ ?>
      <img src="<?php echo $thumb_src; ?>" alt="">
    <?php } ?>


  </body>
</html>
