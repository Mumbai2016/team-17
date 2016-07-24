<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 8:11 PM
 */

class MentorMenteePair {

    private $databaseHandler = null;


    function __construct()
    {
        $this->databaseHandler = Database::connect();
    }

    public function GetMentorByMenteeId($menteeId)
    {
        $user = array();
        $sth = $this->databaseHandler->query("SELECT * FROM mentors where ID =  (SELECT mentor_id from mentor_mentee where mentee_id = $menteeId) ");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($user, $ob);
            }
            return $user;
        } else {
            return FALSE;
        }
    }

    public function GetMenteeByMenterId($mentorId)
    {
        $users = array();
        $sth = $this->databaseHandler->query("SELECT * FROM mentees where ID =  (SELECT mentee_id from mentor_mentee where mentor_id = $menteeId) ");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($users, $ob);
            }
            return $users;
        } else {
            return FALSE;
        }
    }

    public function getPairDetails($pairId)
    {
        $users = array();
        $sth = $this->databaseHandler->query("select m1.id as mentor_id, m2.sid as mentee_id from mentors m1,mentees m2,mentor_mentee p
            where m1.id = p.mentor_id AND m2.sid = p.mentee_id AND p.pair_id = $pairId   ");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($users, $ob);
            }
            return $users;
        } else {
            return FALSE;
        }
    }

    public function getOverScheduledMeeting(){
        $pair = array();
        $sth = $this->databaseHandler->query("SELECT * FROM `meeting` WHERE success = 0 AND date < NOW() ");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($pair, $ob);
            }
            return $pair;
        } else {
            return FALSE;
        }
    }
}