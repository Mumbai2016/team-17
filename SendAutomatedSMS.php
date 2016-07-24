<?php
    require_once 'dbconnect.php';
    require_once 'dbconnect.php';
    require_once 'Konnect/functions/Database.class.php';
    require_once 'Konnect/mappers/MentorMapper.php';
    require_once 'Konnect/mappers/MenteeMapper.php';
    require_once 'Konnect/mappers/MentorMenteePair.php';

    require_once 'SendAutomatedSMS.php';
    $pair_id = $_GET['pair_id'];

    $query="SELECT mentor_id from mentor_mentee where pair_id=$pair_id ";
    $query_run = mysql_query($query);

    $row = mysql_fetch_array($query_run);
    var_dump($row);


    var_dump($row);


    $mentor_id = $row[0];

    $query="SELECT mentee_id from mentor_mentee where pair_id=$pair_id ";
    $query_run = mysql_query($query);

    $row=(mysql_fetch_array($query_run));
    $mentee_id = $row[0];

    $mentee = new MenteeMapper();
    $mentor = new Mentormapper();

    $mm = new MentorMenteePair();

    $mentor_phone = $mentor->getMentorPhoneById($mentor_id);
    $mentee_phone = $mentee->getMenteePhoneById($mentee_id);

var_dump($mentor_phone[0][0]);
var_dump($mentee_phone[0][0]);

    sendSMS($mentor_phone[0][0], "Your meeting is now overdue. Please assign one immediately. Thanks");
sendSMS($mentee_phone[0][0], "Your meeting is now overdue. Please assign one immediately. Thanks");
?>