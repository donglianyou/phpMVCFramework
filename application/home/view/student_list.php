<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生信息表</title>
</head>
<body>
<h2 align="center">学生信息表</h2>
<table border='1' cellspacing='0' cellpadding='5' align='center' width="70%">
    <tr bgcolor="#87cbbe">
        <th>ID</th>
        <th>姓名</th>
        <th>邮箱</th>
        <th>课程</th>
        <th>成绩</th>
    </tr>
    <?php foreach ($data as $stu): ?>
    <tr align="center">
        <td><?php echo $stu['id'];?></td>
        <td><?php echo $stu['name'];?></td>
        <td><?php echo $stu['email'];?></td>
        <td><?php echo $stu['course'];?></td>
        <td><?php echo $stu['grade'];?></td>
    </tr>
    <?php endforeach;?>
</table>
<p align="center">共计：<?php echo count($data);?>条记录</p>
</body>
</html>