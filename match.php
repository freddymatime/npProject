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
    
    $result =$bdd->query("SELECT ID FROM choice WHERE sport1 = '$choix[0]' or sport2 = '$choix[0]' or sport3 ='$choix[0]' ");
    while ($rep = $result->fetch())
        {    
            $result2= $bdd->query("SELECT name,choice.id FROM membres,choice WHERE choice.id = membres.id");
            while($rep2 = $result2->fetch())
                {
                    print_r ($rep2['name']);
                   
                }        
            echo $rep[0]."<br>";
        }

    }


?>