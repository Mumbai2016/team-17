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


$id= $_POST['id'];

$mentor_feedback = $_POST['input_feedback_mentor'];
$mentor_rating = $_POST['input_feedback_rate'];


@$dbh1 = mysql_connect('localhost', 'root', '');
@$dbh2 = mysql_connect('localhost', 'root', '',true);

@mysql_select_db('team17', $dbh1);
@mysql_select_db('team17', $dbh2);

$query="UPDATE meeting set feedback_mentor ='$mentor_feedback' where id = $id ";

$query_run = mysql_query($query);

header('Location : mentor-copy.php');

echo "<script> window.location.href='Mentor-copy.php' </script> ";

?>