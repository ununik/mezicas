<?php
class Connection
{
    protected function connect()
    {
        if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
            $dbh = new PDO('mysql:host=localhost;dbname=mezicas2', 'root', '');
            $dbh->exec("set names utf8");
            return $dbh;
        }else{
            $dbh = new PDO('mysql:host=wm100.wedos.net;dbname=d18905_hpcz', 'w18905_hpcz', 'vL3REs8E');
            $dbh->exec("set names utf8");
            return $dbh;
        }
    }
}