<?php
require("Model.php");
class ModelUtilisateur extends Model
{

    function __construct(){
        parent::__construct("utilisateur");

    }
// la m�thode ajout d'un utilisateur
function ajout_utilisateur($donnees){
    $this->db->insert(
      $this->table,
        array(
           "Reference" =>$donnees["reference"],
            "Pseudo" =>$donnees["pseudo"],
            "Password" =>$donnees["passwd"],
            "TypeUtilisateur" =>$donnees["typeutilisateur"],
            "DateInscription" =>$donnees["dateinscription"],
        )
    );


}

 //le m�thode de suppression d'un utilisateur

    function supprimer_utilisateur($id){

        $this->db->delete(
            $this->table,
            'Id='.$id
        );
    }


    //la m�thode pour lister les utilisateurs

    function lister_utilisateur(){
        $this->db->select(
            '*',
            $this->table,
            ''
        );

        $liste_utilisateur=$this->db->fetch_assoc_all();
        return $liste_utilisateur;
    }


    //la m�thode pour modifier un utilisateur

    function modif_utilisateur($id,$donnees){

        $this->db->update(
            $this->table,
            array(
                "Pseudo" =>$donnees["pseudo"],
                "Password" =>$donnees["passwd"],
                "TypeUtilisateur" =>$donnees["typeutilisateur"],
            ),
            'Id='.$id
        );
    }

    // la m�thode authentification

    function login($email,$password){
        $reference="-1";
        $this->db->select(
            '*',
            $this->table,
            'Email=? AND Password=?',
            array($email,$password)
        );
        $liste_utilisateur=$this->db->fetch_assoc_all();
        if(count($liste_utilisateur)!=0){
            $reference=$liste_utilisateur[0]["Reference"];

        }
       return $reference;
    }

    //m�thode info_utilisateur

    function infos_utilisateur($reference){
        $this->db->select(
            '*',
            $this->table,
            'Reference=?',
            array($reference)
        );
        $infos_utilisateur=$this->db->fetch_assoc_all();

return $infos_utilisateur[0];
    }


    //la fonction pour verifierl'email

    function verif_mail($email){
        $trouver=-1;
        $this->db->select(
            '*',
            $this->table,
            'Email=?',
            array($email)
        );
        $email_utilisateur=$this->db->fetch_assoc_all();

        if( count($email_utilisateur)!=0 ){
            $trouver=1;
        }

        return $trouver;

    }


}
?>