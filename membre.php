<?php   
  try
  {
      $bdd = new PDO('mysql:host=localhost;dbname=sport;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
  }

 
?>

<?php

class members {

    protected $_ID;
    protected $_name;
    protected $_pseudo;
    protected $_age;
    protected $_email;
    protected $_password;

    public function __contruct ($id , $name, $pseudo, $age,$email,$password)
    {
        $this->_ID =$id;
        $this->_name = $name;
        $this->_pseudo= $pseudo;
        $this->_age = $age;
        $this->_email = $email;
        $this->_password = $password;
    }


}



?>