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

    //define the query
    $sql = "INSERT INTO pets(type, name, color) VALUES (:type, :name, :color)";

    //prepare the statement
    $statement = $dbh->prepare($sql);

    //bind the parameters
    $type = 'kangaroo';
    $name = 'Joey';
    $color = 'purple';
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->bindParam(':color', $color, PDO::PARAM_STR);

    //execute
    $statement->execute();
$id = $dbh->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";

    //bind the parameters
    $type = 'snake';
    $name = 'Slitherin';
    $color = 'green';
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->bindParam(':color', $color, PDO::PARAM_STR);

    //execute
    $statement->execute();
    $id = $dbh->lastInsertId();
    echo "<p>Pet $id inserted successfully.</p>";

    //bind the parameters
    $type = 'lemur';
    $name = 'Lexington';
    $color = 'beige';
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->bindParam(':color', $color, PDO::PARAM_STR);

    //execute
    $statement->execute();
    $id = $dbh->lastInsertId();
    echo "<p>Pet $id inserted successfully.</p>";

    //bind the parameters
    $type = 'poisson rouge';
    $name = 'Goldie';
    $color = 'gold';
    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);
    $statement->bindParam(':color', $color, PDO::PARAM_STR);

    //execute
    $statement->execute();
    $id = $dbh->lastInsertId();
    echo "<p>Pet $id inserted successfully.</p>";

    //define the query
    $sql = "UPDATE pets SET name = :new WHERE name = :old";

    //prepare the statement
    $statement = $dbh->prepare($sql);

    //bind the parameters
    $old = 'Joey';
    $new = 'Troy';
    $statement->bindParam(':old', $old, PDO::PARAM_STR);
    $statement->bindParam(':new', $new, PDO::PARAM_STR);

    //execute
    $statement->execute();