<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/24/2016
 * Time: 6:32 AM
 */



$agenda= $_GET['agenda'];
$date = $_GET['meetdate'];
$time = $_GET['time'];
$venue = $_GET['venue'];



@$dbh1 = mysql_connect('localhost', 'root', '');
@$dbh2 = mysql_connect('localhost', 'root', '',true);

@mysql_select_db('team17', $dbh1);
@mysql_select_db('team17', $dbh2);

$query="INSERT INTO meeting (agenda,date,time,venue) values ('$agenda','$date','$time','$venue') ";
echo $query;
$query_run = mysql_query($query);

//header('location : mentor-copy.php');
echo "<script> window.location.href='Mentor-copy.php' </script> ";
?>