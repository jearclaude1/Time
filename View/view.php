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
    <label for="" style="background:red;">hoi</label>
           
        </div>
        <div class="right_contents">
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