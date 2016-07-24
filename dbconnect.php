<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/24/2016
 * Time: 7:01 AM
 */


@$dbh1 = mysql_connect('localhost', 'root', 'root');
@$dbh2 = mysql_connect('localhost', 'root', 'root',true);

@mysql_select_db('team17', $dbh1);
@mysql_select_db('team17', $dbh2);
?>