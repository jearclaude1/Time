<?php
require "../php/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../log.png" type="image/x-icon">

    <title>E-time</title>
</head>
<body>
    <div class="content">
        <div class="left_content">
            <p>E- <span>Time </span></p>
            <menu>
                <ul>
                    <li><a href="./user_page.php">User</a></li>
                    <li><a href="./periods.php">Periods</a></li>
                    <li><a href="./course_page.php">Course</a></li>
                    <li><a href="./class_page.php">Class</a></li>
                    <li><a href="time_table.php">Timetable</a></li>
                </ul>
            </menu>
            <label>Periods</label>
            <form action="../php/period.php" method="post">
                <input type="date" name="date" placeholder="Date" required>
                <input type="time" name="start" placeholder="Start" required>
                <input type="time" name="end" placeholder="End" required>
                <input type="text" name="detail" placeholder="Detail">
                <input type="submit" name="save" value="save" >
            </form>
        </div>
        <div class="right_content">
        <table border="1">
                <tr>
                    <th>periods_id</th>
                    <th>date</th>
                    <th>start</th>
                    <th>end</th>
                    <th>detail</th>
                    <th>Action</th>
                </tr>
                <?php
                  $select=mysqli_query($db,"SELECT DISTINCT `periods_id`, `date`, `start`, `end`, `detail` FROM `period`");
                   if($select->num_rows>0){
                   while($row= mysqli_fetch_assoc($select)) {
                       ?>
                       <tr>
                           <td> <?=$row['periods_id'];?></td>
                           <td> <?=$row['date'];?></td>
                           <td> <?=$row['start'];?></td>
                           <td> <?=$row['end'];?></td>
                           <td> <?=$row['detail'];?></td>
                           <td><a href="../update/period.php?class_id=<?=$row['periods_id'];?>">Update</a></td>
                           <td><a href="../delete/periods.php?class_id=<?=$row['periods_id'];?>">Delete</a></td>
                       </tr>
                <?php  }
               
                } ?>
            </table>
        </div>
    </div>
</body>
</html>