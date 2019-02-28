<?php 
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}c
atch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM transfert');
/*while ($donnees = $reponse->fetch())
{
echo $donnees['nom'] . '<br />';
}
$reponse->closeCursor();*/
?>