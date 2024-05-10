<?php
require "../php/connection.php";
$id=$_GET['class_id'];
$delete =mysqli_query($db," SELECT * FROM `period` WHERE periods_id='$id' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>E-time</title>
</head>
<body>
    <div class="content">
        <div class="left_content">
            <p>E- <span>Time </span></p>
            <menu>
            <ul>
                    <li><a href="../pages/user_page.php">User</a></li>
                    <li><a href="../pages/periods.php">Periods</a></li>
                    <li><a href="../pages/course_page.php">Course</a></li>
                    <li><a href="../pages/class_page.php">Class</a></li>
                    <li><a href="../pages/time_table.php">Timetable</a></li>
                </ul>
            </menu>
            <label>Periods</label>
            
        </div>
        <div class="right_content">
        <form action="" method="post">
            <?php
                   if($delete->num_rows>0){
                   while($row= mysqli_fetch_assoc($delete)) {
                       ?>
                      <input type="date" name="date" value="<?=$row['date']?>" placeholder="Date">
                      <input type="time" name="start" value="<?=$row['start']?>" placeholder="start">
                      <input type="time" name="end" value="<?=$row['end']?>" placeholder="End">
                      <input type="text" name="detail" value="<?=$row['detail']?>" placeholder="detail">
                        <input type="submit" name="save" value="save" >
                <?php  }
               
                } ?>
            </form>
        </div>
 <?php
if(isset($_POST['save'])){
    $date=$_POST['date'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $detail=$_POST['detail'];
    print_r($_POST);
    $query=mysqli_query($db,"UPDATE `period` SET `date`='$date',`start`='$start',`end`='$end',`detail`='$detail' WHERE periods_id='$id' ");
    if ($query ==TRUE) {
        echo "<script>alert('well done !....')</script>";
        header('location:../pages/periods.php');
        exit();
    }
}
        ?>
    </div>
</body>
</html>