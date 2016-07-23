<?php
require_once 'Konnect/functions/Database.class.php';
require_once 'Konnect/mappers/MeetingMapper.php';
require_once 'Konnect/mappers/MentorMenteePair.php';

$m = new MeetingMapper();
$meetings = $m->GetScheduledMeetings(2);
$mmp = new MentorMenteePair();
$mmp->getPairDetails(2);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mentor Page</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    
    
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/owl.transitions.css" >

    <!-- Materialize CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/material.css">
    
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    
    

   

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/color/blue.css" title="blue">
    

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
    <!-- Modernizer js -->
    <script src="assets/js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">  
    <div class="menu-wrap">
		<nav class="menu">
			<div class="icon-list">
			<div style="line-height:0.0001em;margin-bottom:15px;">
			    <h2 class="logo1">Welcome</h2>
				<a href="employee.html" class="logo page-scroll waves-effect">get name</a>
			</div>
				<a href="employeeinfo.html" class="page-scroll waves-effect"><i class="fa fa-fw fa-user"></i><span>Profile</span></a>
				<a href="C:\Users\user1\Desktop\Konnect\MentorAnnouncement.html" class="page-scroll waves-effect"><i class="fa fa-fw fa-envelope-o"></i><span>Announcements</span><span class="w3-badge w3-red">8</span></a>
				<a href="C:\Users\user1\Desktop\Konnect\videoch.html" class="page-scroll waves-effect"><i class="glyglyphicon glyphicon-facetime-video"></i><span>Video Chat</span></a>
				<a href="C:\Users\user1\Desktop\Konnect\MentorAnnouncement.html" class="page-scroll waves-effect"><i class="fa fa-fw fa-comment-o"></i><span>Logout</span></a>
			</div>
		</nav>
		<button class="close-button" id="close-button">Close Menu</button>
	</div>
	<button class="menu-button waves-effect" id="open-button">Open Menu</button>
 
    <div class="row plus-sign waves-effect waves-circle">
			<a href="#" onclick="addup()"><span data-toggle="modal" data-target="#myModal1" style="margin-right:3%;">&#x2795;</span></a>
			</div>
			
			
 <!--section start-->
    <section id="latest-news" class="latest-news-section">
	
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Meeting Conducted</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-12">
                    <div class="testimonial-section waves-effect">
                        <!-- Repeated block of completed meeting STARTS -->
                        <?php


                        foreach($meetings as $meeting) {?>
                        <div class="latest-post waves-effect">
                            <h4>Meeting 1</h4>

                            <p><strong>AGENDA : <?php echo $meeting['agenda'] ?></strong></p>
							<p><strong>DATE : <?php  echo $meeting['date'] ?></strong></p>
							<p><strong>TIME : <?php echo $meeting['time'] ?></strong></p>
							<p><strong>VENUE : <?php echo $meeting['venue'] ?> </strong></p>
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#demo">Feedback</a>
							<div id="demo" class="collapse"><hr>
							<div class="form-group">
							<label for="Mentor">Feedback By Mentor</label>
							<input type="textarea" class="form-control" id="Mentor" name="Mentor" style="overflow-x:scroll;overflow-y:scroll;height:30%" value = "<?php echo $meeting['feedback_mentor']?>"></label>
						    </div>
						<div class="form-group">
							<label for="Mentee">Feedback by Mentee</label>
							<input type="textarea" class="form-control" id="Mentee" name="Mentee" style="overflow-x:scroll;overflow-y:scroll;height:30%;" value="<?php echo $meeting['feedback_mentee']?>"></label>
						</div>
							</div>
                        </div>
                        <?php } ?>
                    <!-- Repeated block of completed meeting ENDS -->

                 </div>
               </div>
               
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->
	
	<h1>Pure CSS Star Rating Widget</h1>
<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
	
	<!-- section 2 -->
	<section id="latest-news" class="latest-news-section">
	
        <div class="container" style="background-color:#ff555;">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Meeting Scheduled</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-12">
                    <div class="testimonial-section waves-effect">
                    
                        <div class="latest-post waves-effect">
                            <h4>Meeting 1</h4>
                            
                            <p>Agenda:</p>
							<p><strong>Date:</strong></p>
							<p><strong>Time:</strong></p>
							<p><strong>Venue:</strong></p>
                            <a class="btn btn-primary" data-toggle="collapse" data-target="#demo">Cancel Meet</a>
							
							</div>
                        
                    
                    
                        <div class="latest-post waves-effect">
                            <h4>Meeting 2</h4>
                            
                            <p>Agenda:</p>
							<p><strong>Date:</strong></p>
							<p><strong>Time:</strong></p>
							<p><strong>Venue:</strong></p>
                            <a class="btn btn-primary">Feedback</a>
                        </div>
						<div class="latest-post waves-effect">
                            <h4>Meeting 2</h4>
                            
                            <p>Agenda:</p>
							<p><strong>Date:</strong></p>
							<p><strong>Time:</strong></p>
							<p><strong>Venue:</strong></p>
                            <a class="btn btn-primary">Feedback</a>
                        </div>
						
						 <div class="latest-post waves-effect">
                            <h4>Meeting 3</h4>
                            
                            <p>Agenda:</p>
							<p><strong>Date:</strong></p>
							<p><strong>Time:</strong></p>
							<p><strong>Venue:</strong></p>
                            <a class="btn btn-primary">Feedback</a>
                        </div>
                 </div>
               </div>
               
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->
	
	
	<!--Goal-->
	<section id="latest-news" class="latest-news-section">
	
        <div class="container" style="color:#ff555;">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Meeting Scheduled</h2>
                        <p></p>
                    </div>
                </div>
            </div>
         
        </div>
    </section>
	
	<!-- Modal1 -->
	  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span>&#x2795;</span> Request Meet</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="login.php" method="post" name="form">
		     <div class="form-group">
              <label for="time"><span>Agenda:</span></label>
              <input type="text" class="form-control" id="agenda" name="agenda" placeholder="Enter Agenda">
            </div>
			<div class="form-group">
              <label for="date"><span>Date:</span></label>
              <input type="date" class="form-control" id="meetdate" name="meetdate" placeholder="Enter Date">
            </div>
              
			<div class="form-group">
              <label for="time"><span>Time:</span></label>
              <input type="text" class="form-control" id="time" name="time" placeholder="Enter Time">
            </div>
           <div class="form-group">
              <label for="venue"><span>Venue:</span></label>
              <input type="text" class="form-control" id="venue" name="venue" placeholder="Enter Venue">
            </div>
            <div>
            <br>
            </div>
              <button type="submit" onclick="submitForm()" class="btn btn-success btn-block" data-dismiss="modal" ><span class="glyphicon glyphicon-off"></span>Submit</button>
          </form>
        </div>     
    </div>
	</div>
	</div>

    <!-- notifs -->
	
	
    
    
	
    
    <!-- jQuery Version 2.1.3 -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.fitvids.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Materialize js -->
    <script src="assets/js/material.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="assets/js/google-map-init.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/script.js"></script>
    
    
</body>
</html>
