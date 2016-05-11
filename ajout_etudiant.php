<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 04/05/2016
 * Time: 10:40
 */
require_once("model/ModelEtudiant.php");
require_once("model/ModelUtilisateur.php");
include_once("config/config.php");
$model_etudiant = new ModelEtudiant();
$model_utilisateur = new ModelUtilisateur();
$reference = "SM"+time();
$model_etudiant->ajoutEtudiant($_POST,$reference);
$model_utilisateur->ajout_utilisateur($_POST,$reference);
echo 1;
?>