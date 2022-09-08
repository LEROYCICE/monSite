<?php 

  $serveur = 'localhost';
  $db_name = 'monsite';
  $login = 'root';
  $pass = '';

  try {
        $connexion = new PDO("mysql:host = $serveur; dbname = $db_name", $login , $pass) ;
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  } catch (PDOException $e) {
    echo "Erreur".$e->getMessage();
    
  }
  



?> 