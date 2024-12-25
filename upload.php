<?php
$target_dir = "uploads/";
$target_file = $target_dir .
basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {echo "Le fichier" .
  basename( $_FILES["fileToUpload"]["name"]). "a été uploadé.";
  // code...
} else {
  echo "Une erreur s'est produite lors du téléchargement du fichier.";
}
  
?>
