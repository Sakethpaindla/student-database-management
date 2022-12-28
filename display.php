<html>
<head>
<style>
table,th,td
{
    border: 1px solid red;
}
</style>
</head>
<body style="background-color: white;">
<?php
$con = mysqli_connect("localhost","root","","Students");
$query = "select * from records";
echo "<table>
<tr>
<th>ROLLNUMBER</th>
<th>NAME</th>
<th>DEPARTMENT</th>
</tr>";
$run = mysqli_query($con , $query);
    if (mysqli_num_rows($run) > 0) {
        while($row = mysqli_fetch_assoc($run)) {
            echo "<tr>";
            echo "<td>" . $row['roll'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['dept'] . "</td>";
            echo "</tr>";
        }
    }
echo "</table>";
?>
</body>
</html>