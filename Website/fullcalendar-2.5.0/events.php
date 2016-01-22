<?php
/**
 * Created by PhpStorm.
 * User: Queldamar
 * Date: 11-1-2016
 * Time: 10:08
 */

// List of events
 $json = array();

 // Query that retrieves events
 $requete = "SELECT * FROM evenement ORDER BY id";

 // connection to the database
 try {
     $bdd = new PDO('mysql:host=mysql.hostinger.nl;dbname=u188345966_event', 'u188345966_bob', '9145210asdf');
 } catch(Exception $e) {
     exit('Unable to connect to database.');
 }
 // Execute the query
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));


 // sending the encoded result to success page
echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
