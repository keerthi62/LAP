<?php
// // $target_dir = "../uploads/";
// $conn = new mysqli("g8r9w9tmspbwmsyo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306","bupdy87dvohbr4iw","gtkjmuz9kqpdnzxg","ovlz54dtty1jll9i");
extract($_POST);
// $target_file = basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   echo " ";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   echo " ";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType == "jpg" && $imageFileType == "png" && $imageFileType == "jpeg"
// && $imageFileType == "gif" ) {
//   echo "Sorry, JPG, JPEG, PNG & GIF files are not allowed.";
//   echo " ";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
//   echo " ";
// // if everything is ok, try to upload file
// } else {
//   $query="INSERT INTO files VALUES ($fileToUpload)";
//   if ($conn->query($query) === TRUE) {
//     echo "The file ". htmlspecialchars($target_file). " has been uploaded.";
//     echo " ";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//     echo " ";
//   }
// }
echo $fileToUpload;
echo basename($_FILES["fileToUpload"]["name"]);
?>
