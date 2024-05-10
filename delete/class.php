<?php
require "../php/connection.php";
$id=$_GET['class_id'];

$delete =mysqli_query($db," DELETE FROM `class` WHERE class_id='$id' ");
if ($delete == true) {
  header('location:../pages/class_page.php');
}
?>
