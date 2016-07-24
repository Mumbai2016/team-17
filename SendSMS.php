<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 11:03 PM
 */

require_once 'dbconnect.php';


function sendSMS($phone,$message)
{


    $from = '07709181070';



        $to = '0' . $phone;
        $body = $message;
        $post_data = array(
            // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
            // For promotional, this will be ignored by the SMS gateway
            'From' => $from,
            'To' => $to,
            'Body' => $body,
        );

        $exotel_sid = "spit5"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
        $exotel_token = "549d6ae58b0c68ae9ce3527506b0b1d44f8de0d4"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings

        $url = "https://" . $exotel_sid . ":" . $exotel_token . "@twilix.exotel.in/v1/Accounts/" . $exotel_sid . "/Sms/send";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));

        $http_result = curl_exec($ch);
        $error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        print "Response = " . print_r($http_result);

}
?>
