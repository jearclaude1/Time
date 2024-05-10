<?php
require "./connection.php";
if(isset($_POST['save'])){
    $date=$_POST['date'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $detail=$_POST['detail'];
    print_r($_POST);
    $query=mysqli_query($db,"INSERT INTO `period`(`date`, `start`, `end`, `detail`) VALUES ('$date','$start','$end','$detail');");
    if ($query ==TRUE) {
        echo "<script>alert('well done !....')</script>";
        header('location:../pages/periods.php');
        exit();
    }
}
?>