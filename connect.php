<?php 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=sport;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

if (isset($_POST['name'],$_POST['password']))
  $name = $_POST['name'];
  $password = $_POST['password'];
  
    {
        $result= $bdd->query("SELECT * FROM membres WHERE name ='$name' AND password='$password'");
            if ($result->rowCount()>0)
                {
                    require("connected.php");
                }
            else{
                echo "connection impossible";
            }

    }


?>