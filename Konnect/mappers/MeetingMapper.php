<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 9:48 PM
 */

/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 8:31 PM
 */

class MeetingMapper {

    private $databaseHandler = null;


    function __construct()
    {
        $this->databaseHandler = Database::connect();
    }

    public function GetScheduledMeetings($pairId)
    {
        $meetings = array();
        $sth = $this->databaseHandler->query("
            SELECT * FROM meeting where
            $pairId = $pairId
            AND
            success = 0
            ");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($meetings, $ob);
            }
            return $meetings;
        } else {
            return FALSE;
        }
    }

    public function GetSuccessfulMeetings($pairId)
    {
        $meetings = array();
        $sth = $this->databaseHandler->query("
            SELECT * FROM meetings where
           $pairId = $pairId
            AND
            success = 0
            ");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($user, $ob);
            }
            return $meetings;
        } else {
            return FALSE;
        }
    }





}