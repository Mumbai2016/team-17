<?php
require_once 'dbconnect.php';

include 'MentorRegister.html';
@$username=$_POST['username'];
@$password=$_POST['password'];
@$Technology=$_POST['ct'];
@$Civil=$_POST['civil'];
@$Mechanical=$_POST['mech'];
@$Electronics=$_POST['elec'];
@$Electrical=$_POST['tele'];
@$Finance=$_POST['fin'];
@$English=$_POST['vocab'];
@$Moral=$_POST['moral'];
@$Contact=$_POST['contact'];
@$Experiance=$_POST['exp'];
@$guidance=$_POST['guid'];

@$gender=$_POST['optradio'];

@$Name=$_POST['name'];
//echo "$_POST['exp']";

	
if(isset($username)&&isset($password)){
	if(!empty($username)&&!empty($password)){


		$query="INSERT INTO mentors values('','job','$gender','address','city','$Technology','$Civil','$Mechanical','$Electronics','$Electrical','$Finance','$English','$Moral','$Contact','$Experiance','$password','$username','$Name')";
		
	$query_run=mysqli_query($dbh1,"$query");
	
	}
			
			
			
		
		
	
	
}

?>