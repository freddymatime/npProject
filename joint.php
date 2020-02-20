<?php 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=sport;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


     
     /*  $req = $bdd->query("SELECT name,sport1 FROM membres,choice where membres.id = choice.id  ");
       while ($result = $req->fetch())
        {
            echo $result["name"];
        }
       
        $req2 = $bdd->query("SELECT id,name FROM choice,membres WHERE membres.id =")
      */  

      $req = $bdd->query ("SELECT membres.name, choice FROM membres INNERJOIN choice  ON membres.id = choices.id_membres ")
?>