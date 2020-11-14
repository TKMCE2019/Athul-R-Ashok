<?php

include 'connect.php';
extract($_GET);
$query="DELETE FROM USER WHERE ID='$id'";
mysqli_query($connect,$query);
header('location:display.php');
?>