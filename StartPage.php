<?php
include "DB.php";

$q = $dbh->prepare("select * from profile");
if ($q->execute()) {
    while ($row = $q->fetch()) {
        var_dump($row);
    }
}