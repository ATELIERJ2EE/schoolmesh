/**
 * Created by Acer on 04/05/2016.
 */
$(document).ready(function(){
    /**
     * OUVERTURE DU FORMULAIRE
     */
    $("#erreur_ajout_etudiant").hide();
    $("#succes_ajout_etudiant").hide();
    $("#form_ajout_etudiant").on("submit", function(e){
        e.preventDefault();
        $.ajax({
            url: "scripts/ajout_etudiant.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){

            if(data == 1){
                $("#succes_ajout_etudiant").show();
            }else{
                $("#erreur_ajout_etudiant").show();
            }
                $("#form_ajout_etudiant")[0].reset();


            },
            error: function(data){
                alert("Erreur survenue");
            }


        })
    });

});
