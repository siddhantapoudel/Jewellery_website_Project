<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="lightbox.min.css">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
    <style>
    @media only screen and (max-width: 480px) {
      #gallery img
      {
        width:100px;
        margin: 5px;
        transition: 0.5s;
      }
    }
    </style>
  </head>
  <body>

    <?php require 'header.php' ?>;

    <div class="container">
      <h2 style="margin-top:55px;">Our Collections</h2>

      <div id="gallery" align="center">

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
        <a value = "<?php echo $file_name_for_img ?>" href="<?php echo $imageURL; ?>" data-lightbox="mygallery">
          <img src="<?php echo $imageThumbURL; ?>" alt="" />
        </a>
        <?php }
        } ?>

      </div>
    </div>
    <?php include 'footer.php'; ?>

  </body>
</html>
