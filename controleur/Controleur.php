<?php
$action=@$_GET["action"];
$md_utilisateur=new ModelUtilisateur();
$md_etudiant=new ModelEtudiant();

switch($action){

    case "login":
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
         if(isset($_SESSION["reference"]) && $_SESSION["reference"]!=-1){
           $donnees_utilisateur=$md_utilisateur->infos_utilisateur($_SESSION["reference"]);
             include("vue/back_end/dashboard.php");
         }

        break;


    case "authentification":
        header("Location:index.php?msg=1#authentification");
    break;


    case "inscription":
         $reference="SM".time();
         $md_utilisateur->ajout_utilisateur($_POST,$reference);
         $md_etudiant->ajoutEtudiant($_POST,$reference);
        $_SESSION["message_insc"]="inscription effectuee avec succes";
        header("Location:index.php?msg=2#authentification");
        break;

    case "form-utilisateur":
        if(isset($_SESSION["reference"]) && $_SESSION["reference"]!=-1) {
            $donnees_utilisateur = $md_utilisateur->infos_utilisateur($_SESSION["reference"]);
            include("vue/utilisateur/ajoutUtilisateur.php");
        }
        break;

    default:
        include("vue/front_end/index.php");
}




?>