<?php
include "../php/connection.php";
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
                    <li><a href="./user_page.php">User</a></li>
                    <li><a href="./periods.php">Periods</a></li>
                    <li><a href="./course_page.php">Course</a></li>
                    <li><a href="./class_page.php">Class</a></li>
                    <li><a href="time_table.php">Timetable</a></li>

                </ul>
            </menu>
            <label>Timetable</label>

            <form action="../php/time_time.php" method="post">
        <select name="user_id" id="">
            <option value="">select a user</option>
            <?php
            $query="SELECT * FROM `user`";
            $result=mysqli_query($db,$query);
            while($row=mysqli_fetch_array($result)){?>
            <option value="<?php echo $row[0]?>">
            <?php echo $row[1]?></option>
            <?php } ?>
            
        </select>
        <select name="course_id">
            <option value="">select course</option>
            <?php 
            $query="SELECT * FROM `course` ";
            $result=mysqli_query($db,$query);
            while($row=mysqli_fetch_array($result)){?>
            <option value="<?php echo $row[0]?>">
            <?php echo $row[1]?></option>
            <?php } ?>   
        </select>
        <select name="class_id" id="">
            <option value="">select classroom</option>
            <?php 
            $query="SELECT * FROM `class`";
            $result=mysqli_query($db,$query);
            while($row=mysqli_fetch_array($result)){?>
            <option value="<?php echo $row[0]?>">
            <?php echo $row[1]?></option>
            <?php } ?>
            
        </select>
        <select name="period_id" id="">
            <option value="">select period</option>
            <?php
            $query="SELECT * FROM `period`";
            $result=mysqli_query($db,$query);
            while($row=mysqli_fetch_array($result)){?>
            <option value="<?php echo $row[0]?>">
            <?php echo $row[1]?>
            <?php echo $row[2]?>
            <?php echo $row[3]?>
        </option>
            <?php } ?>
        </select>
        <select name="day" id="">
        <option value="">select day</option>
              <option value="Man">Man</option>
              <option value="Man">Tue</option>
              <option value="Man">Wedn</option>
              <option value="Man">Thus</option>
              <option value="Man">Fri</option>
        </select>

        <input type="submit" value="create timetable" name="save">

    </form>

           
        </div>
        <div class="right_content">
        <table>
                    <tr>
                        <th>#</th>
                        <th>course</th>
                        <th>Date</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Class_name</th>
                        <th>User</th>
                        
                        
                    </tr>&nbsp;
                    <?php
                    
                    $query=mysqli_query($db,"SELECT course.course_name,period.date,time_table.Day,period.start,period.end,period.detail,class.class_name,class.class_detail,user.* FROM time_table INNER JOIN class ON time_table.class_id=class.class_id INNER JOIN course ON time_table.course_id=course.course_id INNER JOIN period ON time_table.periods_id=period.periods_id INNER JOIN user ON time_table.user_id=user.user_id;");
                    $id=1;
                    if ($query->num_rows>0) {
                        while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                          <tr>  
                            <td><?php echo $id++;?></td>
                            <?php if($id == 5){
                                echo '<br> <br>';
                                continue; 
                            }?>
                            <td><?php echo $row['course_name'];?></td>
                            <td><?php echo $row['date'].'&nbsp;&nbsp;&nbsp;'.$row['Day'];?></td>
                            <td><?php echo $row['start'];?></td>
                            <td><?php echo $row['end'];?></td>
                            <td><?php echo $row['class_name'];?></td>
                            <td><?php echo $row['user_name'];?></td>
                            </tr>
                       <?php }
                    }
                    ?>
                </table>
        </div>
    </div>
</body>
</html>