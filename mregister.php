<?php
require_once 'dbconnect.php';
include 'menteregister.html';

@$Name=$_POST['mname'];
@$Age=$_POST['mage'];
@$pref=$_POST['pref'];
@$City=$_POST['mcity'];
@$College=$_POST['mcollege'];
@$Address=$_POST['address'];
@$Password=$_POST['password'];
@$Username=$_POST['musername'];
@$contact=$_POST['contact'];
if(isset($Username)&&isset($Password)){
	if(!empty($Username)&&!empty($Password)){
		

    
		$query="INSERT INTO mentees values('','$Name','$Address','$Age','$pref','$City','$College','$Password','$Username','$contact')";
		
	$query_run=mysqli_query($dbh1,"$query");
		echo $query;
	}
			
			
			
		
		
	
	
}

?>