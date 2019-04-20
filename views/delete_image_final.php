<?php

  include 'dbConfig.php';
  $var_value = $_GET['varname'];
  echo $var_value;
  $insertz = $db->query("DELETE FROM images_final WHERE file_name='".$var_value."'");
  $image_location = "uploads/".$var_value;
  $image_location_thumb = "uploads/thumbs/".$var_value;
  if($insertz)
  {
    echo "file deleted Successfully";
    echo "<br>";
    unlink($image_location);
    unlink($image_location_thumb);

  }
  else {
    echo "file deletion failed";
  }

 ?>
