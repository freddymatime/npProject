<?php 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=sport;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




if (isset($_POST["submit"])){
    $name = htmlspecialchars($_POST['name']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
      

    if (isset($_POST['name'],$_POST['email'],$_POST['pseudo'],$_POST['password']))
    {
        $rec=$bdd->exec ("INSERT INTO membres (name, pseudo, email, password) VALUES('$name','$pseudo','$email','$password')");

    }
    

}


?>