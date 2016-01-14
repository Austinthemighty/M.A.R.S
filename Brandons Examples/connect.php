<?php
try {
    $dbh = new PDO('mysql:host=10.104.11.79;dbname=reservation', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}