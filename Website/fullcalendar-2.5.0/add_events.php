<?php
/**
 * Created by PhpStorm.
 * User: Queldamar
 * Date: 11-1-2016
 * Time: 10:09
 */
// Values received via ajax
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$url = $_POST['url'];

// connection to the database
try {
    $bdd = new PDO('mysql:host=localhost;dbname=events', 'bob', 'test');
} catch(Exception $e) {
    exit('Unable to connect to database.');
}

// insert the records
$sql = "INSERT INTO `evenement` ( `title`, `start`, `end`, `url`, `allDay`) VALUES ('$title', '$start', '$end', '$url', 'false');";
$q = $bdd->prepare($sql);
$q->execute(array(':title'=>$title, ':start'=>$start, ':end'=>$end,  ':url'=>$url));
