/*
    Ellen Goetsch
    February 11, 2019
    index.php
*/

<?php

    //connect to database
    try {
        //instantiate a database object
        $dbh = new PDO("mysql:dbname=egoetsch_grc",
            "egoetsch", "DeeJay07912");
        echo 'Connected to database!';
    } catch(PDOException $e) {
        echo $e->getMessage();
    }