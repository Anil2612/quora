<?php
$con=mysqli_connect("localhost","root","","mine") or die(mysqli_error($con));
$sql_query="select name,about,phone from Users";
$sql_query_result=mysqli_query($con,$sql_query)or die(mysqli_error($con));
$sql_row=mysqli_num_rows($sql_query_result);
for($i=0;$i<$sql_row;$i++)
{
    $row=mysqli_fetch_row($sql_query_result);
    echo $row[0];
    echo "<br>";
    echo $row[1];
    echo "<br>";
    echo $row[2];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}


?>