<!DOCTYPE html>
<html lang="en">

<?php include("header.php"); ?>

<body>

<div class="container-fluid">

    <!--menu-->

    <div class="row">
        <div class="col-md-12" id="menu">
            <nav role="navigation" class="navbar navbar-default">
                <!--Gestion de l’affiche sur les terminaux mobiles -->
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse"
                            data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div href="#" class="navbar-brand"><img src="assets/front_end/slide/logo1.png" id="logo">
                    </div>
                </div>

                <!--Liste des liens -->

                <div id="navbarCollapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="glyphicon glyphicon-home" style="color:#ff791f"></i> ACCUEIL</a></li>
                        <li><a href="#"><i class="fa fa-suitcase" style = "color : #ff791f"></i>&nbsp QUI SOMMES NOUS?</a></li>
                        <li><a href="#"><i class="fa fa-pencil-square-o" style = "color : #ff791f"></i>&nbsp INSCRIPTION</a></li>
                        <li><a href="#"><i class = "fa fa-graduation-cap" style = "color : #ff791f"></i>&nbsp DIPLOMES ET FORMATIONS</a></li>
                        <li><a href="#authentification"><i class=" fa fa-laptop" style = "color : #ff791f"></i> &nbsp CONNEXION</a></li>
                        <li><a href="#"><i class=" fa fa-envelope-o" style  = "color : #ff791f"></i>&nbsp CONTACT</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">aa</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!--slide-->

    <div class="row">
        <div class="col-md-12" id="slide">

            <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">

                <!-- Carousel indicators -->

                <ol class="carousel-indicators">

                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                    <li data-target="#myCarousel" data-slide-to="1"></li>

                    <li data-target="#myCarousel" data-slide-to="2"></li>

                </ol>

                <!-- Carousel items -->

                <div class="carousel-inner">

                    <div class="item active">

                        <img src="assets/front_end/slide/slide1.jpg" alt="First Slide" id="img">

                        <div class="carousel-caption">

                        </div>

                    </div>

                    <div class="item">

                        <img src="assets/front_end/slide/foto2.jpg" alt="Second Slide" id = "img">

                        <div class="carousel-caption">

                        </div>

                    </div>

                    <div class="item">

                        <img src="assets/front_end/slide/foto3.jpg" alt="Third Slide" id="img">

                        <div class="carousel-caption">

                        </div>

                    </div>

                </div>

                <!-- Carousel nav -->

                <a class="carousel-control left" href="#myCarousel" data-slide="prev">

                    <span class="glyphicon glyphicon-chevron-left"></span>

                </a>

                <a class="carousel-control right" href="#myCarousel" data-slide="next">

                    <span class="glyphicon glyphicon-chevron-right"></span>

                </a>

            </div>

        </div>
    </div>

    <!--quisommesnous-->

    <div class="row">
        <div class="col-md-12 titre">
            <i class="fa fa-home"></i>&nbsp;qui sommes nous?</div>
    </div>

    <!--contenu_quisommesnou-->

    <div class="row">
        <div class="col-md-12 contenu"></div>
    </div>

    <!--inscription-->

    <div class="row">
        <div class="col-md-12 titre" id="authentification">
            <i class=" fa fa-pencil-square-o"></i>&nbsp; INSCRIPTION</div>



    </div>

    <!--formulaire-->

    <div class="row">

        <!--formulaire pour l'inscription-->

        <div class="col-md-6 contenu " >
            <form class="form-horizontal" role="form" action="traitement_contact.php?action=ajouter" method="post">
                <div class="form-group" >
                    <label class="control-label col-sm-4">Nom:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom" required>
                    </div>
                </div>
                <div class="form-group" >
                    <label class="control-label col-sm-4">Pr&eacutenom:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="prenom" placeholder="Entrer votre prenom" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Date de Naissance:</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="date" placeholder="Entrer votre date de naissance" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4">Nationalite:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  name="entrep" placeholder="Entrer votre nationalite " >
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4"  >Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control"  name="email" placeholder="Entrer votre email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" >T&eacutel&eacutephone:</label>
                    <div class="col-sm-8">
                        <input type="tel" maxlength=16 class="form-control" name="tel" placeholder="Entrer votre numero de  telephone" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4"  >Sexe:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  name="email" placeholder="Sexe" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4"  >Adresse:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  name="email" placeholder="Entrer votre adresse" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" ></label>
                    <div class="col-sm-8">
                        <center> <button type="submit" class="btn btn-success" >ENVOYER</button>&nbsp;&nbsp;
                            <button type="reset" class="btn btn-danger">ANNULER</button></center>
                        <br>
                    </div>
                </div>
            </form>

        </div>

        <!--formulaire pour l'authentification-->


        <div class="col-md-6 contenu" style="border-left: 10px solid white">
        <center><img class ="img-circle" src="assets/front_end/slide/login.gif">   </center>

            <center><?php if (@$_GET["msg"]==1) { ?>
                <div class="alert alert-danger">
                    <i class="fa fa-exclamation-triangle"  ></i>
                    <label> <?php echo $_SESSION["message"]; ?></label>

                </div>


                <?php }?>
            </center>
            <form class="form-horizontal" role="form"  action="index.php?action=login" method="post">
                <div class="form-group" >
                    <label class="control-label col-sm-4">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" placeholder="Entrer votre email" required>
                    </div>
                </div>
                <div class="form-group" >
                    <label class="control-label col-sm-4">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password" placeholder="Entrer votre mot de passe" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" ></label>
                    <div class="col-sm-8">
                        <center> <button type="submit" class="btn btn-success" >ENVOYER</button>&nbsp;&nbsp;
                            <button type="reset" class="btn btn-danger">ANNULER</button></center>
                        <br>
                    </div>
                </div>
            </form>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-md-12 titre">
            <i class=" fa fa-phone-square "></i>&nbsp;nous-contacter</div>
    </div>

    <div class="row">

        <div class="col-md-6 contact" id="map"></div>
        <div class="col-md-6 contact"></div>
    </div>

    <?php include("footer.php"); ?>

</div>
</body>
</html>