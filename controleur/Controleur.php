<?php
$action=@$_GET["action"];


switch($action){

    case "login":
        $md_utilisateur=new ModelUtilisateur();
        $reference=$md_utilisateur->login($_POST["email"],$_POST["password"]);
        if ($reference==-1){
           // session_start();
            $_SESSION["message"]="Pseudo ou mot de passe erroné";
            header("Location:index.php?action=authentification");
        }

        else{

            $_SESSION["reference"]=$reference;
            header("Location:index.php?action=dashboard");

        }
        break;

    case "dashboard":
         if(isset($_SESSION["reference"])and $_SESSION["reference"]!=-1){
             include("vue/back_end/dashboard.php");
         }

        break;


    case "authentification":
        header("Location:index.php?msg=1#authentification");
    break;

    default:
        include("vue/front_end/index.php");

}




?>