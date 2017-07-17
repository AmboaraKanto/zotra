 <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand" href="#"><span class="highlight">Zotra</span> Admin</a>
        <button type="button" class="sidebar-toggle">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="active">
                <a href="<?php echo base_url() ?>Accueil/test">
                    <div class="icon">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </div>
                    <div class="title">Tableau de bord</div>
                </a>
            </li>   

            <li class="dropdown ">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                    </div>
                    <div class="title">Gestion de Bus</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Bus</li>
                        <li><a href="liste-bus.php">Lister</a></li>
                        <li><a href="ajout-bus.php">Ajouter</a></li>                       
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Autres... </li>
                        <!-- <li><a href="./pages/landing.html">Landing</a></li> -->
                        <li><a href="liste-bus.php">Les bus libres</a></li>            
                        <!-- <li><a href="./pages/404.html">404</a></li> -->
                    </ul>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-road" aria-hidden="true"></i>
                    </div>
                    <div class="title">Gestion de Trajet</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Trajet</li>
                        <li><a href="liste-trajet.php">Lister</a></li>
                        <li><a href="ajout-trajet.php">Ajouter</a></li>                       
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Autres... </li>
                        <!-- <li><a href="./pages/landing.html">Landing</a></li> -->
                        <li><a href="pages/login.html">Les plus frequentés</a></li>            
                        <!-- <li><a href="./pages/404.html">404</a></li> -->
                    </ul>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="title">Gestion de Chauffeur</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Chauffeur</li>
                        <li><a href="liste-chauffeur.php">Lister</a></li>
                        <li><a href="ajout-chauffeur.php">Embaucher</a></li>                      
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Autres... </li>
                        <!-- <li><a href="./pages/landing.html">Landing</a></li> -->
                        <li><a href="pages/login.html">Les plus appréciés</a></li>            
                        <!-- <li><a href="./pages/404.html">404</a></li> -->
                    </ul>
                </div>
            </li>
         

        </ul>
    </div>
 
</aside>
<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
    {{list}}
  </div>
</script>