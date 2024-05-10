<?php
require "../php/connection.php";
$id=$_GET['class_id'];

$delete =mysqli_query($db," DELETE  FROM `course` WHERE course_id='$id' ");
if ($delete == true) {
    header('location:../pages/course_page.php');

  }
?>
