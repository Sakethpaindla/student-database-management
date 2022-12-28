<html>
<head>
    <style>
         #st{
    background-color: light pink;
    color: white;
    }
    </style>
</head>
<body bgcolor="light pink">
<?php
$ser = "localhost";
$usr = "root";
$pwd = "";
$dbname = "Students";
 $con = mysqli_connect($ser , $usr , $pwd , $dbname);
 $roll = $_POST['roll'];
 $name = $_POST['name'];
 $dept = $_POST['dept'];
 if($roll and $name and $dept)
 {
    $query = "select * from records where roll = '$roll'";
    $run = mysqli_query($con , $query);
    if (mysqli_num_rows($run) > 0) {
        echo "Duplicate RollNo Found , Change RollNumber !";
        echo "<div align = 'center'><a href='insert.html' style='text-decoration: none;' id = 'st'> CLICK HERE TO RETURN</a></div>";
    }
    else{
        $quer = "insert into records(roll , name , dept) values('$roll' , '$name' , '$dept')";
        $r = mysqli_query($con , $quer);
        if($r)
        {
            print("Data Added to the data base");
            echo "<div align = 'center'><a href='insert.html' style='text-decoration: none;' id = 'st'>CLICK HERE TO RETURN</a></div>";
        }

    }
}
    else 
    {
        echo "<div align = 'center'><a href='main.html' style='text-decoration: none;' id = 'st'>CLICK HERE TO RETURN</a></div>";
    }
?>
</body>
</html>