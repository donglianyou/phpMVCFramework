<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>成绩详情页</title>
</head>
<body>
<h2 align="center">学生信息表</h2>
<table border='1' cellspacing='0' cellpadding='5' align='center' width="70%">
    <tr bgcolor="#87cbbe" align="center">
        <th>字段</th>
        <th>值</th>
    </tr>
    <tr align="center">
        <td>id</td>
        <td><?php echo $data['id'];?></td>
    </tr>
    <tr align="center">
        <td>姓名</td>
        <td><?php echo $data['name'];?></td>
    </tr>
    <tr align="center">
        <td>邮箱</td>
        <td><?php echo $data['email'];?></td>
    </tr>
    <tr align="center">
        <td>课程</td>
        <td><?php echo $data['course'];?></td>
    </tr>
    <tr align="center">
        <td>成绩</td>
        <td
            <?php
            if ($data['grade']<60) {
                    echo "style='color:red'";
                }else{
                    echo "style='color:green'";
                } 
            ?>
        ><?php echo $data['grade'];?></td>
    </tr>
</table>
    <p align='center'
        <?php
           if ($data['grade']<60) {
                echo "style='color:red'";
            }else{
                echo "style='color:green'";
            } 
        ?>
    >
        <?php
            if ($data['grade']<60) {
                echo "不及格,你需要补课哟~~";
            }else{
                echo "恭喜，你毕业了~~";
            }
        ?>
    </p>
</body>
</html>