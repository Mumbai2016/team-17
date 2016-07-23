<?php
@$dbh1 = mysql_connect('localhost', 'root', ''); 
@$dbh2 = mysql_connect('localhost', 'root', '',true); 

@mysql_select_db('team17jp', $dbh1);
@mysql_select_db('team17jp', $dbh2);
include 'MentorRegister.html';
@$username=$_POST['username'];
@$password=$_POST['password'];
@$Technology=$_POST['ct'];
@$Civil=$_POST['civil'];
@$gender=$_POST['optradio'];
@$Mech=$_POST['mech'];


	
if(isset($username)&&isset($password)){
	if(!empty($username)&&!empty($password)){


		$query="INSERT INTO mentors values('','job','$gender','address','city','$Technology','$Civil','1','1','1','1','1','1','87989','3','$password','HDFH','$username')";
		
	$query_run=mysql_query($query,$dbh1);
	
	}
			
			
			
		
		
	
	
}

?>