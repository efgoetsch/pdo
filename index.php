<!--
    Ellen Goetsch
    February 11, 2019
    index.php
-->

<?php

    //connect to database
require '/home/egoetsch/config.php';
    try {
        //instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        echo 'Connected to database!';
    } catch(PDOException $e) {
        echo $e->getMessage();
    }