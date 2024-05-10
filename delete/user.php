<?php
require "../php/connection.php";
$id=$_GET['class_id'];

$delete =mysqli_query($db," DELETE  FROM `user` WHERE user_id='$id' ");
if ($delete == true) {
    header('location:../pages/user_page.php');

  }

?>
