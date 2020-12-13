<?php
$conn = new mysqli("g8r9w9tmspbwmsyo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306","bupdy87dvohbr4iw","gtkjmuz9kqpdnzxg","ovlz54dtty1jll9i"); //create connection.
$sql = "SELECT * FROM files";
if ($result = $conn -> query($sql)) {
  while ($row = $result -> fetch_row()) {
    echo "<button type="submit" onclick="window.location.href='$row[0]'">" . basename($row[0]) . "</button>";
//     echo "<a href='$row[0]' download>" . basename($row[0]) . "</a><br>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
button{
	text-decoration: none;
	color: blue;
}
button:hover{
	text-decoration: underline;
}
</style>
</head>
<body>
</body>
</html>
