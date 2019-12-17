<?php 
/*  
apres selection sport, effectuer les correspondances via bdd
*/
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=sport;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// recuperer les cases selectionnées

if (isset ($_POST['choix'])){

    $choix = $_POST['choix'];

    $result =$bdd->query("SELECT sport1,sport2,sport3 FROM choice ");
     while ($rep = $result->fetch())

        {
            if ($rep['sport1']==$choix OR $choix == $rep['sport2']OR $choix ==$rep['sport3'] )
            {
                echo "il y a correspondance";
            }    
                 
        }

     $result->closeCursor();
    }

?>