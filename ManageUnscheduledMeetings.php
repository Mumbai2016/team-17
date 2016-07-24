<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/24/2016
 * Time: 7:41 AM
 */
require_once 'dbconnect.php';
require_once 'Konnect/functions/Database.class.php';
require_once 'Konnect/mappers/MentorMapper.php';
require_once 'Konnect/mappers/MenteeMapper.php';
require_once 'Konnect/mappers/MentorMenteePair.php';


$mentor_id = $_GET['mentor_id'];
$mentee_id = $_GET['mentee_id'];

$mentee = new MenteeMapper();
$mentor = new Mentormapper();

$mm = new MentorMenteePair();

$mentor_phone = $mentor->getMentorPhoneById($mentor_id);
$mentee_phone = $mentee->getMenteePhoneById($mentee_id);

var_dump($mentor_phone);
var_dump($mentee_phone);






?>