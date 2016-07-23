<?php
$dbh1 = mysql_connect('localhost', 'root', ''); 
$dbh2 = mysql_connect('localhost', 'root', '',true); 

mysql_select_db('test', $dbh1);
mysql_select_db('news', $dbh2);

@$username=$_POST['username'];
@$password=$_POST['password'];
@$nick=$_POST['nickname'];
@$category=$_POST['type'];
if(isset($username)&&isset($password)){
	if(!empty($username)&&!empty($password)){


		$query="INSERT INTO members values('$username','$password','$nick')";
		
	$query_run=mysql_query($query,$dbh1);
	
	}
			
			
			
		
		
	
	
}

?>