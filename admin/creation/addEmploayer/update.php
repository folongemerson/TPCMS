<?php
    require_once('controller.php');
    checkIfConnected();
    if (isset($_POST['name']) && 
    isset($_POST['biographie']) && 
    isset($_POST['dateNais']) && 
    isset($_POST['poste']) && 
    isset($_FILES["photo"])&&
    isset($_FILES["cv"])&&
    isset($_POST['id']))
    {
        //$name,$biographie,$dateNais,$poste,$image
        update($_POST['name'],$_POST['biographie'],$_POST['dateNais'],$_POST['poste'],$_FILES['photo']['name'],$_POST['id'],$_FILES["cv"]);
        // die("stop");

        //redirection
        televerser();
        header('Location: ../../index.php');
    }
//     <?php
// $var="User', email='test";
// $a=new PDO("mysql:host=localhost;dbname=database;","root","");
// $b=$a->prepare("UPDATE `users` SET user=:var");
// $b->bindParam(":var",$var);
// $b->execute();
// ?>
