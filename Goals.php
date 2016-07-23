<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 9:42 PM
 */

require_once 'Konnect/functions/Database.class.php';
require_once 'Konnect/mappers/GoalMappers.php';

$goalMapper = new GoalMappers();


var_dump($goalMapper->GetAllGoals(1));