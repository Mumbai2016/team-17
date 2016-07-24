<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/24/2016
 * Time: 3:10 AM
 */


$id= $_GET['meeting_id'];
$mentor_feedback = $_GET['mentor_feedback'];
$mentee_feedback = $_GET['mentee_feedback'];
$mentee_rating = $_GET['mentee_rating'];


@$dbh1 = mysql_connect('localhost', 'root', 'root');
@$dbh2 = mysql_connect('localhost', 'root', 'root',true);

@mysql_select_db('team17', $dbh1);
@mysql_select_db('team17', $dbh2);

$query="UPDATE meeting set mentor_feedback ='$mentor_feedback', mentee_feedback = '$mentee_feedback' ";
$query_run = mysql_query($query);

header('location : mentor-copy.php');
?>