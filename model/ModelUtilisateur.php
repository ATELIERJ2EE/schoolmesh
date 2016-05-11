<?php
//require_once("Model.php");
class ModelUtilisateur extends Model
{

    function __construct(){
        parent::__construct("utilisateur");

    }
// la méthode ajout d'un utilisateur
function ajout_utilisateur($donnees,$reference){
    $this->db->insert(
      $this->table,
        array(
           "Reference" =>$reference,
            "Email" =>$donnees["email"],
            "Password" =>$donnees["password"],
            "Type" =>$donnees["typeutilisateur"],
            "DateInscription" =>date("d/m/y"),
            "Actif"=>1
        )
    );


}

 //le méthode de suppression d'un utilisateur

    function supprimer_utilisateur($id){

        $this->db->delete(
            $this->table,
            'Id='.$id
        );
    }


    //la méthode pour lister les utilisateurs

    function lister_utilisateur(){
        $this->db->select(
            '*',
            $this->table,
            ''
        );

        $liste_utilisateur=$this->db->fetch_assoc_all();
        return $liste_utilisateur;
    }


    //la méthode pour modifier un utilisateur

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

    // la méthode authentification

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

    //méthode info_utilisateur

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