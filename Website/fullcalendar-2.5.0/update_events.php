<?php
/**
 * Created by PhpStorm.
 * User: Queldamar
 * Date: 11-1-2016
 * Time: 10:10
 */

/* Values received via ajax */
$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

// connection to the database
try {
    $bdd = new PDO('mysql:host=mysql.hostinger.nl;dbname=events', 'u188345966_bob', '9145210asdf');
} catch(Exception $e) {
    exit('Unable to connect to database.');
}
// update the records
$sql = "UPDATE evenement SET title=?, start=?, end=? WHERE id=?";
$q = $bdd->prepare($sql);
$q->execute(array($title,$start,$end,$id));
