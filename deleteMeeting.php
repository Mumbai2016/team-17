<?php

require_once 'dbconnect.php';

$id= $_GET['id'];


$query="DELETE  from meeting where id=$id";
$query_run = mysql_query($query);

header('location : mentor-copy.php');
echo "<script> window.location.href='Mentor-copy.php' </script> ";
?>