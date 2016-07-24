<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/24/2016
 * Time: 5:46 AM
 */


/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/24/2016
 * Time: 3:10 AM
 */

require_once 'dbconnect.php';

$id= $_POST['id'];

$mentor_feedback = $_POST['input_feedback_mentor'];
$mentor_rating = $_POST['input_feedback_rate'];


$query="UPDATE meeting set feedback_mentor ='$mentor_feedback' where id = $id ";

$query_run = mysql_query($query);

header('Location : mentor-copy.php');

echo "<script> window.location.href='Mentor-copy.php' </script> ";

?>