<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/24/2016
 * Time: 6:32 AM
 */

require_once 'dbconnect.php';

$agenda= $_GET['agenda'];
$date = $_GET['meetdate'];
$time = $_GET['time'];
$venue = $_GET['venue'];




$query="INSERT INTO meeting (agenda,date,time,venue) values ('$agenda','$date','$time','$venue') ";
echo $query;
$query_run = mysql_query($query);

//header('location : mentor-copy.php');
echo "<script> window.location.href='Mentor-copy.php' </script> ";
?>