
<?php

?>

<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title></title>
	<script type="text/javascript" src="https://api.bistri.com/bistri.conference.min.js"></script>
     
	  <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    
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

	<script type="text/javascript">
		/*
    JS library reference:
    http://developers.bistri.com/webrtc-sdk/js-library-reference
*/

var room;
var members;
var localStream;

// when Bistri API client is ready, function
// "onBistriConferenceReady" is invoked
onBistriConferenceReady = function () {

    // test if the browser is WebRTC compatible
    if ( !bc.isCompatible() ) {
        // if the browser is not compatible, display an alert
        alert( "your browser is not WebRTC compatible !" );
        // then stop the script execution
        return;
    }

    // initialize API client with application keys
    // if you don't have your own, you can get them at:
    // https://api.developers.bistri.com/login
    bc.init( {
        "appId": "500f03c8",
        "appKey": "f3099079122e50669848cf39a7085fa9"
    } );
    
    /* Set events handler */

    // when local user is connected to the server
    bc.signaling.bind( "onConnected", function () {
        // show pane with id "pane_1"
        showPanel( "pane_1" );
    } );

    // when an error occured on the server side
    bc.signaling.bind( "onError", function ( error ) {
        // display an alert message
        alert( error.text + " (" + error.code + ")" );
    } );

    // when the user has joined a room
    bc.signaling.bind( "onJoinedRoom", function ( data ) {
        // set the current room name
        room = data.room;
        members = data.members;
        // ask the user to access to his webcam
        bc.startStream( "webcam-sd", function( stream ){
            // affect stream to "localStream" var
            localStream = stream;
            // when webcam access has been granted
            // show pane with id "pane_2"
            showPanel( "pane_2" );
            // insert the local webcam stream into div#video_container node
            bc.attachStream( stream, q( "#video_container" ), { mirror: true } );
            // then, for every single members present in the room ...
            for ( var i=0, max=members.length; i<max; i++ ) {
                // ... request a call
                bc.call( members[ i ].id, room, { "stream": stream } );
            }
        } );
    } );

    // when an error occurred while trying to join a room
    bc.signaling.bind( "onJoinRoomError", function ( error ) {
        // display an alert message
       alert( error.text + " (" + error.code + ")" );
    } );
    
    // when the local user has quitted the room
    bc.signaling.bind( "onQuittedRoom", function( room ) {
        // stop the local stream
        bc.stopStream( localStream, function(){
            // remove the stream from the page
            bc.detachStream( localStream );
            // show pane with id "pane_1"
            showPanel( "pane_1" );
        } );
    } );
    
    // when a new remote stream is received
    bc.streams.bind( "onStreamAdded", function ( remoteStream ) {
        // insert the new remote stream into div#video_container node
        bc.attachStream( remoteStream, q( "#video_container_2" ) );
    } );
    
    // when a remote stream has been stopped
    bc.streams.bind( "onStreamClosed", function ( stream ) {
        // remove the stream from the page
        bc.detachStream( stream );
    } );
    
    // when a local stream cannot be retrieved
    bc.streams.bind( "onStreamError", function( error ){   
        switch( error.name ){
            case "PermissionDeniedError":
                alert( "Webcam access has not been allowed" );
                bc.quitRoom( room );
                break
            case "DevicesNotFoundError":
                if( confirm( "No webcam/mic found on this machine. Process call anyway ?" ) ){
                    // show pane with id "pane_2"
                    showPanel( "pane_2" );
                    for ( var i=0, max=members.length; i<max; i++ ) {
                        // ... request a call
                        bc.call( members[ i ].id, room );
                    }
                }
                else{
                    bc.quitRoom( room );  
                }
                break
        }
    } );

    // bind function "joinConference" to button "Join Conference Room"
    q( "#join" ).addEventListener( "click", joinConference );
    
    // bind function "quitConference" to button "Quit Conference Room"
    q( "#quit" ).addEventListener( "click", quitConference );
    
    // open a new session on the server
    bc.connect();
}

// when button "Join Conference Room" has been clicked
function joinConference(){
    var roomToJoin = '1';
@session_start();
@$userid=$_SESSION['user'][0]['ID'];

echo "$userid";
    @$dbh1 = mysqli_connect('localhost', 'root', '',"team17"); 
@$dbh2 = mysqli_connect('localhost', 'root', '',true); 
mysqli_select_db($dbh1,"team17");
    $query="select  pair_id from mentor_mentee where mentor_id=$userid ";
    
     $comments = mysql_query($query);
     
    echo "$comments";
    

    
    ?>';
    // if "Conference Name" field is not empty ...
    if( roomToJoin ){
        // ... join the room
        bc.joinRoom( roomToJoin );
    }
    else{
        // otherwise, display an alert
        alert( "you must enter a room name !" )
    }  
}

// when button "Quit Conference Room" has been clicked
function quitConference(){
    // quit the current conference room
    bc.quitRoom( room );
}

function showPanel( id ){ 
    var panes = document.querySelectorAll( ".pane" );
    // for all nodes matching the query ".pane"
    for( var i=0, max=panes.length; i<max; i++ ){
        // hide all nodes except the one to show
        panes[ i ].style.display = panes[ i ].id == id ? "block" : "none";
    };
}

function q( query ){
    // return the DOM node matching the query
    return document.querySelector( query );
}
	</script>
	<style type="text/css">
			#video_container{
			    margin-left:10px;
                margin: 20px;
                text-align: center;
                width:550px;
                height:550px; 
                position:absolute;
                top:250px;
                left: 750px;
                z-index: 1;
                float:left;
			}
            #video_container_2{
                margin-right:0px;
                margin: 20px;
                text-align: center;
                width:550px;
                height:550px; 
                position:absolute;
                top:250px;
                left: 100px;
                float:right;
            }
            
			video {
			    width: 100%;
			}
            body{
            background-color:#E6E6FA;
            }           
            .container-fluid{
            color:#28ABE3;
            } 
			.intro-text {
				position: relative;
				padding: 1% 0 1% 0;
                        }
		    
			 .padd {
			 margin-left:47%;
			 }

 
	</style>
</head>
<body>
    <div class="container-fluid" style="height:100px ">
            <div class="intro-text">
                <h1 class="col-sm-12 col-lg-9" style="top:50%;left:45%;"><strong>Video Chat</strong></h1>
            </div>
     </div>
    <div class="pane" id="pane_1" style="display: block">

        <br>
        <input type="button" value="Start Video Chat" id="join" class="btn btn-info btn-default btn-lng padd">
    </div>
    
    <div class=" pane" id="pane_2" style="display: none">
        <div id="video_container"></div>
        <div id="video_container_2"></div>
        <input type="button" value="Quit Conference Room" id="quit" class="btn btn-danger btn-default btn-block">
    </div>
</body>
</html>