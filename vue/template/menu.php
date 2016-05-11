<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="assets/back_end/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="assets/back_end/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->

            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="assets/back_end/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#"> <?php echo $donnees_utilisateur["Nom"];?></a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <!--<ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list nav-active"><a href="index.html"><i class="fa fa-home"></i> <span>Acceuil</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="index_alt.html"> Dashboard 1</a></li>
                        <li class="active"><a href="index.html"> Dashboard 2</a></li>
                    </ul>
                </li>-->
            <br><br>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Acceuil</span></a>
                </li>

                <!--<li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>Layouts</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="blank_page.html"> Blank Page</a></li>
                        <li><a href="boxed_view.html"> Boxed Page</a></li>
                        <li><a href="leftmenu_collapsed_view.html"> Sidebar Collapsed</a></li>
                        <li><a href="horizontal_menu.html"> Horizontal Menu</a></li>

                    </ul>
                </li>-->
                <?php if ($donnees_utilisateur["Type"]=="Administrateur"){?>
                    <li class="menu-list"><a href=""><i class="fa fa-user"></i> <span>Utilisateurs</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="boxed_view.html">Modifier Utilisateur</a></li>
                            <li><a href="leftmenu_collapsed_view.html"> Supprimer Utilisateur</a></li>
                            <li><a href="horizontal_menu.html">Lister Utilisateur</a></li>

                        </ul>
                    </li>
                <?php }?>
                <?php if ($donnees_utilisateur["Type"]=="Administrateur"){?>
                    <li class="menu-list"><a href=""><i class="fa fa-user"></i> <span>Etudiant</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="index.php?action=form-utilisateur">Ajout Etudiant</a></li>

                        </ul>
                    </li>
                <?php }?>

               <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Messages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="general.html"> Envoyer message</a></li>
                        <li><a href="buttons.html"> Boite de reception</a></li>
                    </ul>
                </li>


                <li class="menu-list"><a href=""><i class="fa fa-users"></i> <span>Groupe</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="grids.html">Nouveau Groupe</a></li>
                        <li><a href="gallery.html">Creer un groupe</a></li>
                        <li><a href="calendar.html">Lister les groupes</a></li>

                    </ul>
                </li>

                <!--<li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>Fontawesome</span></a></li>-->

                <li class="menu-list"><a href=""><i class="fa fa-pencil-square-o"></i> <span>Publications</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="mail_compose.html">Faire une publication</a></li>
                        <li><a href="mail_view.html"> Voir les publications</a></li>
                        <li><a href="mail_compose.html">Supprimer une publication</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-calendar-o"></i> <span>Evenements</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="mail_compose.html">Creer un evenement</a></li>
                        <li><a href="mail_compose.html">Lister les evenements</a></li>
                    </ul>
                </li>

                <li><a href=""><i class="fa fa-picture-o"></i> <span>Photos</span></a>

                <li><a href=""><i class="fa fa-gamepad"></i> <span>Jeux</span></a>
<!--
                <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="form_layouts.html"> Form Layouts</a></li>
                        <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                        <li><a href="form_wizard.html"> Form Wizards</a></li>
                        <li><a href="form_validation.html"> Form Validation</a></li>
                        <li><a href="editors.html"> Editors</a></li>
                        <li><a href="inline_editors.html"> Inline Editors</a></li>
                        <li><a href="pickers.html"> Pickers</a></li>
                        <li><a href="dropzone.html"> Dropzone</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="flot_chart.html"> Flot Charts</a></li>
                        <li><a href="morris.html"> Morris Charts</a></li>
                        <li><a href="chartjs.html"> Chartjs</a></li>
                        <li><a href="c3chart.html"> C3 Charts</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="basic_table.html"> Basic Table</a></li>
                        <li><a href="dynamic_table.html"> Advanced Table</a></li>
                        <li><a href="responsive_table.html"> Responsive Table</a></li>
                        <li><a href="editable_table.html"> Edit Table</a></li>
                    </ul>
                </li>

                  </ul>
                </li>
               <!-- <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="profile.html"> Profile</a></li>
                        <li><a href="invoice.html"> Invoice</a></li>
                        <li><a href="pricing_table.html"> Pricing Table</a></li>
                        <li><a href="timeline.html"> Timeline</a></li>
                        <li><a href="blog_list.html"> Blog List</a></li>
                        <li><a href="blog_details.html"> Blog Details</a></li>
                        <li><a href="directory.html"> Directory </a></li>
                        <li><a href="chat.html"> Chat </a></li>
                        <li><a href="404.html"> 404 Error</a></li>
                        <li><a href="500.html"> 500 Error</a></li>
                        <li><a href="registration.html"> Registration Page</a></li>
                        <li><a href="lock_screen.html"> Lockscreen </a></li>
                    </ul>
                </li>
                -->
                <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                    <ul class="sub-menu-list">
                <li><a href="google_map.html"> Google Map</a></li>
                        </ul>
                <li><a href="login.html"><i class="fa fa-sign-out"></i> <span>Deconnexion</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
