<?php
//require_once("Model.php");
class ModelEtudiant extends Model
{

    function __construct()
    {
        parent::__construct("Etudiant");

    }

    function ajoutEtudiant($donnees,$reference){

        $this->db->insert(
            $this->table,
            array(
                "Reference" =>$reference,
                "Nom" =>$donnees["nom"],
                "Prenom" =>$donnees["prenom"],
                "Date_naissance" =>$donnees["date"],
                "Nationalite" =>$donnees["nationalite"],
                "Annee" =>$donnees["annee"],
                "Filiere" =>$donnees["filiere"],
                "Adresse" =>$donnees["adresse"],
                "Telephone" =>$donnees["tel"]


            )
        );
    }


    function listerEtudiant(){
        $this->db->select(
            '*',
            $this->table,
            ''
        );

        $liste_etudiant=$this->db->fetch_assoc_all();
        return $liste_etudiant;
    }


    function modifEtudiant($id,$donnees){

        $this->db->update(
            $this->table,
            array(
                "Nom" =>$donnees["nom"],
                "Prenom" =>$donnees["prenom"],
                "Date_naissance" =>$donnees["date"],
                "Nationalite" =>$donnees["nationalite"],
                "Filiere" =>$donnees["filiere"],
                "Adresse" =>$donnees["adresse"],
                "Telephone" =>$donnees["tel"],
                "Annee" =>$donnees["annee"]

            ),
            'Id='.$id
        );
    }


    function supprimerEtudiant($id){

        $this->db->delete(
            $this->table,
            'Id='.$id
        );
    }


}
    ?>