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
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Resultat match friend</title>
  </head>
  <body>
    <h1>Resultat de la selection</h1>

    
    
<?php
// recuperer les cases selectionnées
if (isset ($_POST['choix'])){
    $choix = $_POST['choix'];
  // SELECT name FROM membres   
   /* $result =$bdd->query("SELECT ID
     FROM choice WHERE sport1 = '$choix[0]' or sport2 = '$choix[0]' or sport3 ='$choix[0]' ");
    while ($rep = $result->fetch())
        {   
            $result2= $bdd->query("SELECT name,choice.id FROM membres,choice WHERE choice.id = membres.id");
            while($rep2 = $result2->fetch())
                {
                    print_r ($rep2['name'])."<br>";
                   
                }                 
            
        }

    
    }*/
    $result =$bdd->query("SELECT name From membres WHERE sport1='$choix[0]' or sport2='$choix[0]' or sport3 = '$choix[0]'");
      while ($rep = $result->fetch())
     
        {
        echo "<ul>" ."<li class='list-group-item'>"."<a href=''>"."<h2>".$rep['name']."<h2>"."</a>"."</li>"."</ul>"."<br>";
            
        } 
    }      
     
  /*  <ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
*/
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>