<html>
<head>
 <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script>
jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});</script>
<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
		margin-top:0px;
    padding:5px;
}


/* #### Dark Matter #### */
.dark-matter {
    margin-left: auto;
    margin-right: auto;
    max-width: 500px;
    background: #555;
    padding: 20px 30px 20px 30px;
    font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #D3D3D3;
    text-shadow: 1px 1px 1px #444;
    border: none;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
.dark-matter h1 {
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom: 1px solid #444;
    margin: -10px -30px 30px -30px;
}
.dark-matter h1>span {
    display: block;
    font-size: 11px;
}
.dark-matter label {
    display: block;
    margin: 0px 0px 5px;
}
.dark-matter label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    font-weight: bold;
}
.dark-matter input[type="text"], .dark-matter input[type="email"], .dark-matter textarea, .dark-matter select {
    border: none;
    color: #525252;
    height: 25px;
    line-height:15px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 5px 0px 5px 5px;
    width: 70%;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    background: #DFDFDF;
}
.dark-matter select {
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    appearance:none;
    -webkit-appearance:none; 
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 35px;
    color: #525252;
    line-height: 25px;
}
.dark-matter textarea{
    height:100px;
    padding: 5px 0px 0px 5px;
    width: 70%;
}
.dark-matter .button {
    background: #FFCC02;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #585858;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    text-shadow: 1px 1px 1px #FFE477;
    font-weight: bold;
    box-shadow: 1px 1px 1px #3D3D3D;
    -webkit-box-shadow:1px 1px 1px #3D3D3D;
    -moz-box-shadow:1px 1px 1px #3D3D3D;
}

.dark-matter .button:hover {
    color: #333;
    background-color: #EBEBEB;
}

/*----- Tabs -----*/
.tabs {
    width:100%;
    display:inline-block;
}
 
    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links:after {
        display:block;
        clear:both;
        content:'';
    }
 
    .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
            padding:9px 15px;
            display:inline-block;
            border-radius:3px 3px 0px 0px;
            background:#7FB5DA;
            font-size:16px;
            font-weight:600;
            color:#4c4c4c;
            transition:all linear 0.15s;
        }
 
        .tab-links a:hover {
            background:#a7cce5;
            text-decoration:none;
        }
 
    li.active a, li.active a:hover {
        background:#fff;
        color:#4c4c4c;
    }
 
    /*----- Content of Tabs -----*/
    .tab-content {
        padding:15px;
        border-radius:3px;
        box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
        background:#fff;
    }
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }
		</style>
</head>
<body>

<div class="tabs" >
<div id="cssmenu">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Students with Mentors</a></li>
        <li><a href="#tab2">Students without menties</a></li>
        
    </ul>
 </div>
    <div class="tab-content">
        <div id="tab1" class="tab active">
<div style='width: 350px;
border: 5px solid gray;
box-shadow: 5px 5px 3px #888;
border-top: 10px solid gray;
    position: relative;
    left: 450px;
	top: 50px;
min-height: 15px;
padding-: 30px;
font-size: 45px;
'>
<center>Students with mentors</center> 
</div>
<br><br><br>




<?php
if(!mysql_connect('localhost','root','root')||!mysql_select_db('team17jp')){
   die('Could not connect to the database');
}
	$query="Select * from mentees where MID!=0";
	
	$comments= mysql_query($query);
	while($row = mysql_fetch_array($comments, MYSQL_ASSOC))
	{
		$id= $row['SID'];
	  $name = $row['Name'];
	  $Age = $row['Age'];
	  $City = $row['City'];
	  $College = $row['College'];





 echo " 
<br>
 <div style='width: 1000px;
border: 1px solid gray;
box-shadow: 1px 1px 3px #888;
background-color:lightgrey;
border-top: 10px solid grey;
border-left: 10px solid grey;
min-height: 200px;
margin-left:100px;
font-weight:900;
padding-: 10px;
font-size: 15pt;

'>
     
 Name: $name<br>
     Age: $Age<br>
      City: $City<br>
      College: $College
    <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='details.php?id=$id' <button id='$id' value='$id'>VIEW</button></a>     
    </div>
  ";

	}
?>
</div>
        <div id="tab2" class="tab">
            <p>Tab #2 content goes here!</p>
		
		<div style='width: 650px;
border: 5px solid gray;
box-shadow: 5px 5px 3px #888;
border-top: 10px solid gray;
    position: relative;
    left: 450px;
	top: 50px;
min-height: 15px;
padding-: 30px;
font-size: 45px;
'>
<center>Students without mentors.</center> 


</div>

<?php	

	$query1="Select * from mentees where MID=0";
	
	$comments1= mysql_query($query1);
	while($row1 = mysql_fetch_array($comments1, MYSQL_ASSOC))
	{
		$id= $row1['SID'];
	  $name = $row1['Name'];
	  $Age = $row1['Age'];
	  $City = $row1['City'];
	  $College = $row1['College'];





 echo " 
<br>
 <div style='width: 1000px;
border: 1px solid gray;
box-shadow: 1px 1px 3px #888;
background-color:lightgrey;
border-top: 10px solid grey;
border-left: 10px solid grey;
min-height: 200px;
margin-left:100px;
font-weight:900;
padding-: 10px;
font-size: 15pt;

'>
     
 Name: $name<br>
     Age: $Age<br>
      City: $City<br>
      College: $College
    <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='details.php?id=$id' <button id='$id' value='$id'>VIEW</button></a>     
    </div>
  ";

	}

	




?>
</div>

</body>
</html>