<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 3:24 PM
 */

require_once 'MenteeMapper.php';
require_once 'MentorMapper.php';


class MenteeMapper {


    private $databaseHandler;


    function __construct(){
        $this->databaseHandler = Database::connect();
    }

    public function Register(){

    }

    public function Login($username,$password){

    }


}