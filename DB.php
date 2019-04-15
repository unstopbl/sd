<?php

try {
    $dbh = new PDO('mysql:host=localhost;port:3307;dbname=sd', 'root', 'OpenStack123');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";   //catching exceptions
    die();
}