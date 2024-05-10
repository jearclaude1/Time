<?php
require "../php/connection.php";
$id=$_GET['class_id'];
$delete =mysqli_query($db," SELECT * FROM `course` WHERE course_id='$id' ");
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
            <label>Course</label>
            
        </div>
        <div class="right_content">
        <form action="" method="post">
            <?php
                   if($delete->num_rows>0){
                   while($row= mysqli_fetch_assoc($delete)) {
                       ?>
                      <input type="text" name="name" value="<?=$row['course_name']?>" placeholder="Course_name">
                      <input type="submit" name="save" value="save" >
                <?php  }
               
                } ?>
            </form>
        </div>

        <?php
     if(isset($_POST['save'])){
        $name=$_POST['name'];
        $query=mysqli_query($db," UPDATE `course` SET `course_name`='$name' WHERE `course`='$id' ");
        if ($query) {
            echo "<script>alert('well done !....')</script>";
            header('location:../pages/course_page.php');
            exit();
        }
    }
        ?>
    </div>
</body>
</html>