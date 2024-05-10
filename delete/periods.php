<?php
require "../php/connection.php";
$id=$_GET['class_id'];

$delete=mysqli_query($db," DELETE FROM `period` WHERE periods_id='$id' ");
if ($delete == true) {
    header('location:../pages/periods.php');
  }
?>
