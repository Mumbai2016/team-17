<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 9:38 PM
 */

class GoalMappers {
    private $databaseHandler = null;


    function __construct()
    {
        $this->databaseHandler = Database::connect();
    }

    public function GetAllGoals($pairId)
    {
        $goals = array();
        $sth = $this->databaseHandler->query("
            SELECT * FROM goal where
            $pairId = $pairId
            ");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($goals, $ob);
            }
            return $goals;
        } else {
            return FALSE;
        }
    }
}