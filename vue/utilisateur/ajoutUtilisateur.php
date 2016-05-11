<?php
include("vue/template/header.php");
include("vue/template/menu.php");
?>
<!-- main content start-->
<div class="main-content" >

    <!-- header section start-->
    <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--search start-->
        <form class="searchform" action="index.html" method="post">
            <input type="text" class="form-control" name="keyword" placeholder="Rechercher ici  ..." />
        </form>
        <!--search end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <!--<span class="badge">8</span>-->
                        <span class="badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 8 pending task</h5>
                        <ul class="dropdown-list user-list">
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Database update</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                            <span class="">40%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Dashboard done</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                            <span class="">90%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Web Development</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                            <span class="">66% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Mobile App</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="">33% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Issues fixed</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                            <span class="">80% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new"><a href="">See All Pending Task</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <!--<span class="badge">5</span>-->
                        <span class="badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">Messages</h5>
                        <!-- <h5 class="title">You have 5 Mails </h5>-->
                        <ul class="dropdown-list normal-list">

                            <li class="new"><a href="">Consulter tous vos messages</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <!--<span class="badge">4</span>-->
                        <span class="badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">

                            <li class="new"><a href="">Voir toutes les notifications</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/back_end/images/photos/fanta.png" alt="" />
                        <?php //echo $donnees_utilisateur["Nom"];?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href=""><i class="fa fa-user"></i>  Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>  Notifications</a></li>
                        <li><a href="index.php?deconnexion"><i class="fa fa-sign-out"></i>Deconnexion</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--notification menu end -->

    </div>
    <!-- header section end-->


    <!--body wrapper start-->
    <div class="wrapper">

        <div class="row">
            <?php include("vue/template/stats.php")?>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <header class="panel-heading">
                                Ajout etudiant
                                    <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="fa fa-times" href="javascript:;"></a>
                                     </span>
                            </header>
                            <div class="panel-body">
                                <div class="alert-danger" id="erreur_ajout_etudiant">
                                    <i class="fa fa-exclamation-triangle"  ></i>
                                    <label>Erreur enregistrement</label>
                                </div>
                                <div class="alert-success" id="succes_ajout_etudiant">
                                    <i class="fa fa-check-circle-o"  ></i>
                                    <label>Enregistrement effectué</label>
                                </div>
                                <div class="form">
                                    <form class="cmxform form-horizontal adminex-form" id="form_ajout_etudiant">
                                        <input type="hidden" value="Etudiant" name="typeutilisateur"/>
                                        <div class="form-group" >
                                            <label class="control-label col-sm-4">Nom:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom" required>
                                            </div>
                                        </div>
                                        <div class="form-group" >
                                            <label class="control-label col-sm-4">Pr&eacute;nom:</label>
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
                                                <input type="text" class="form-control"  name="nationalite" placeholder="Entrer votre nationalite " >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4">Filiere:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control"  name="filiere" placeholder="Entrer votre filiere" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4"  >Email:</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control"  name="email" placeholder="Entrer votre email" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4"  >Annee:</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control"  name="annee" placeholder="Entrer votre annee d'etude" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4"  >Password:</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control"  name="password" placeholder="Entrer votre mot de passe" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" >T&eacute;l&eacute;phone:</label>
                                            <div class="col-sm-8">
                                                <input type="tel" maxlength=16 class="form-control" name="tel" placeholder="Entrer votre numero de  telephone" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4"  >Sexe:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control"  name="sexe" placeholder="Sexe" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4"  >Adresse:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control"  name="adresse" placeholder="Entrer votre adresse" required>
                                            </div>
                                        </div>


                                        <div class="form-group ">
                                            <label for="actif" class="control-label col-sm-4">Actif</label>
                                            <div class="col-sm-8">
                                                <input  type="radio" style="width: 20px" class="form-control" id="actif" name="actif" />
                                            </div>
                                            <label for="inactif" class="control-label col-sm-4">Inactif</label>
                                            <div class="col-sm-8">
                                                <input  type="radio" style="width: 20px" class="form-control" id="actif" name="actif" />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--body wrapper end-->


<?php
include("vue/template/footer.php");
?>
