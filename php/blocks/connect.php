<?php
    $mysqli = false;
    function connectDB(){
        global $mysqli;
        $mysqli = new mysqli('xf388135.mysql.tools','xf388135_db','jkHnSa4V','xf388135_db');
        $mysqli->query("SET NAMES 'utf-8'");
    }
    function closeDB(){
        global $mysqli;
        $mysqli->close();
    }
   //$mysql = new mysqli('localhost','root','root','foodita');
?>