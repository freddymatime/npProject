<?php 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=sport;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//inscription


if (isset($_POST["submit"])){  //verification champs
    $name = htmlspecialchars($_POST['name']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $sport1 = htmlspecialchars($_POST['sport1']);
    $sport2 = htmlspecialchars($_POST['sport2']);
    $sport3 = htmlspecialchars($_POST['sport3']);
      
// champs ok , insertion bdd
    if (isset($_POST['name'],$_POST['email'],$_POST['pseudo'],$_POST['password'],$_POST['sport1']))
    {
        $rec=$bdd->exec ("INSERT INTO membres (name, pseudo, email, password, sport1, sport2, sport3) VALUES('$name','$pseudo','$email','$password','$sport1','$sport2','$sport3')");
        require("connection.php");
    }
    

}


?>