<?php
  session_start();

  if(isset($_SESSION['uname']))
  {

    echo "<br><a href='admin.php'><input type='button' name='back' value='Go back to admin panel'></a>";
    echo "<br>";
    echo "<br><a href='logout.php'><input type='button' value= 'logout' name= 'logout'></a>";
  }
  else
  {
    echo "<script>location.href='login.php'</script>";
  }


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" media="screen"
          href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../bootstrap/css/main.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>

      #gallery
      {
        align: center;
        margin: 10px 50px;
      }

      #gallery img
      {
        width:344px;
        padding: 5px;
        transition: 0.5s;
      }

      #gallery img:onclick
      {
        transform: scale(1.1);
      }

      #gallery img:hover
      {
        transform: scale(1.1);
      }

    </style>
  </head>
  <body>
    <div class="container">
      <h2 align= "center">DELETE IMAGES</h2>
      <p><h4>Find the Desired image and click on Submit button to delete</h4></p>
      <div id="gallery">

        <?php
        // Include database configuration file
        require 'dbConfig.php';

        // Retrieve images from the database
        $query = $db->query("SELECT * FROM images_final ORDER BY uploaded_on DESC");

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageThumbURL = 'uploads/thumbs/'.$row["file_name"];
                $imageURL = 'uploads/'.$row["file_name"];
                $path_parts = pathinfo($imageURL);
                $file_name_for_img = $path_parts['basename'];
        ?>
        <a value = "<?php echo $file_name_for_img ?>" href="<?php echo $imageURL."?varname=".$file_name_for_img ?>" data-lightbox="mygallery">
          <img src="<?php echo $imageThumbURL; ?>" alt="" />
        </a>
        <form method="get" action="delete_image_final.php">
          <input type="hidden" name="varname" value="<?php echo $file_name_for_img?>">
          <input type="submit">
        </form>
        <?php }
        } ?>
      </div>
    </div>

  </body>
</html>
