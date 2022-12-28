<html>
    <head>
        <style>
             
    input[type=submit] , #st{
    background-color: light orange;
    color: white;
    }
        </style>
    </head>
<body bgcolor="light orange">
<?php
$ser = "localhost";
$usr = "root";
$pwd = "";
$dbname = "Students";
 $con = mysqli_connect($ser , $usr , $pwd , $dbname);
 $roll = $_POST['roll'];
 if($roll)
 {
    $query = "select * from records where roll = '$roll'";
    $run = mysqli_query($con , $query);
    if (mysqli_num_rows($run) == 0) {
        echo "Enter the valid RollNumber !"."<br>"."<br>";
        echo "<a href = 'delete.html' style='text-decoration: none;' id = 'add'> CLICK HERE TO RETURN </a>";
    } 
    else{
        $query = "delete from records where roll = '$roll'";
        $run = mysqli_query($con , $query);
        if($run){
            echo "Deleted Succesfully !";
        }
        echo "<div align = 'center'><a href='delete.html' style='text-decoration: none;' id = 'st'>CLICK HERE TO RETURN</a></div>";
    }
}
else {
    echo "Enter the valid RollNumber !"."<br>"."<br>";
    echo "<a href = 'delete.html' style='text-decoration: none;' id = st'>CLICK HERE TO RETURN</a>";
}
 ?>
 </body>
 </html>