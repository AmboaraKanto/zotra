<html>
    <?php
    include('header.php');
    ?>    
</html>
<body>
    <div class="app app-default">
        <?php
        include('menu-left-admin.php');
        ?>
        <div class="app-container">
            <?php
            include('navigation.php');
            ?>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <a class="card card-banner card-green-light" href="liste-cooperative.php">
                        <div class="card-body">
                            <i class="icon fa fa-car fa-4x"></i>
                            <div class="content">
                                <div class="title">Nombre de coopérative</div>
                                <div class="value"><span class="sign"></span>5</div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <a class="card card-banner card-blue-light" href="liste-administrateur.php">
                        <div class="card-body">
                            <i class="icon fa fa-user fa-4x"></i>
                            <div class="content">
                                <div class="title">Nombre d'administrateurs</div>
                                <div class="value"><span class="sign"></span>3</div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <a class="card card-banner card-yellow-light" href="liste-administrateur.php">
                        <div class="card-body">
                            <i class="icon fa fa-flag fa-4x"></i>
                            <div class="content">
                                <div class="title">Nombre de destinations</div>
                                <div class="value"><span class="sign"></span>20</div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>          
        </div>
    </div>
    <?php include('script.php') ?>
</body>
</html>