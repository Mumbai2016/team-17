<?php
$id= $_GET['id'];


@$dbh1 = mysql_connect('localhost', 'root', ''); 
@$dbh2 = mysql_connect('localhost', 'root', '',true); 

@mysql_select_db('team17', $dbh1);
@mysql_select_db('team17', $dbh2);

$query="DELETE  from meeting where id=$id";
$query_run = mysql_query($query);

header('location : mentor-copy.php');
echo "<script> window.location.href='Mentor-copy.php' </script> ";
?>