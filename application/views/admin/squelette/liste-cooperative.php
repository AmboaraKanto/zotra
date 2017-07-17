<html>
    <?php include('header.php'); ?>    
</html>
<body>
    <div class="app app-default">
        <?php include('menu-left-admin.php'); ?>
        <div class="app-container">
            <?php include('navigation.php'); ?>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">                           
                            Voici la liste des coopératives adhérées
                        </div>
                        <div class="card-body no-padding">
                            <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Désignation</th>
                                        <th>Date de création</th>                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cotisse</td>
                                        <td>11 Juin 2014</td>                                       
                                        <td>
                                            <a data-toggle="modal" href="#update"><span class="fa fa-edit" style="color:green"> </span></a>
                                            <a data-toggle="modal" href="#remove"><span class="fa fa-remove" style="color:red"> </span></a>                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Sonatra</td>
                                        <td>12 Mai 2016</td>                                       
                                        <td>
                                            <a data-toggle="modal" href="#update"><span class="fa fa-edit" style="color:green"> </span></a>
                                            <a data-toggle="modal" href="#remove"><span class="fa fa-remove" style="color:red"> </span></a>                                            
                                        </td>
                                    </tr>


                                    <!-- Modal update -->
                                <div class="modal fade" id="update" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Modification d'informations</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <form role="form" method="post" action="#">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Le nom</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="nom" class="form-control" placeholder="Anjara Trans">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">La date de création</label>
                                                                <div class="col-md-1">
                                                                    <input type="date" name="date" required>
                                                                </div>
                                                            </div>                                                        
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Modifier</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <!-- Modal remove  -->
                                <div class="modal fade" id="remove" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="color:red">Détachement de coopérative</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p> Etes-vous sûr de vouloir destituer cette coopérative ? </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Oui</button>
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Non</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                        </div>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>            
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<?php include('script.php') ?>
</body>