<?php

    require "managers/AbstractManager.php";
    $dbName = "blanchepeltier_phpj9";
    $port = "3306";
    $host = "db.3wa.io";
    $username = "blanchepeltier";
    $password = "6df6213ed1bccc46589270829cdb7338";
    
    $manager = new UserManager ($dbName, $port, $host, $username, $password);
    
?>