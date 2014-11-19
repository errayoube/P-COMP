<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=stage', 'root', '');
	
}
catch(Exception $e)
{
    die('Echec lors de la connexion &agrave; la base de donn&eacute;es : '.$e->getMessage());
}

?>