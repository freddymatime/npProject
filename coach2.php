<?php 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=sport;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

if (isset ($_POST['choix']))
{
    $choix = $_POST['choix'];
    
    $result =$bdd->query("SELECT nom FROM coach WHERE sport = '$choix[0]' ");
    while ($rep = $result->fetch())
        {
            echo $rep['nom'] ;
        }

}







?>