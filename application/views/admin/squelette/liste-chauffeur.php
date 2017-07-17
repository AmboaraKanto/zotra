
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">                           
                            Voici la liste des chauffeurs en service
                        </div>
                        <div class="card-body no-padding">
                            <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>CIN</th>
                                        <th>Date d'embauche</th>                                     
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($allDrivers);$i++){ ?>
                                        <tr>
                                            <td><?php echo $allDrivers[$i]->idchauffeur; ?></td>
                                            <td><?php echo $allDrivers[$i]->nom; ?></td>
                                            <td><?php echo $allDrivers[$i]->prenom; ?></td>
                                            <td><?php echo $allDrivers[$i]->cin; ?></td>
                                            <td><?php echo $allDrivers[$i]->dateembauche ?></td>                                       
                                            <td>
                                                <a data-toggle="modal" href="#update<?php echo $i; ?>"><span class="fa fa-edit" style="color:green"> </span></a>
                                                <a data-toggle="modal" href="#remove<?php echo $i; ?>"><span class="fa fa-remove" style="color:red"> </span></a>                                            
                                            </td>
                                        </tr>

                                                  <!-- Modal update -->
                                <div class="modal fade" id="update<?php echo $i; ?>" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Modification des informations d'un chauffeur</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <form role="form" method="post" action="#">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Son nom</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="nom" class="form-control" placeholder="<?php echo $allDrivers[$i]->nom; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Son prenom</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="prenom" class="form-control" placeholder="<?php echo $allDrivers[$i]->prenom; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Son CIN</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="cin" class="form-control" placeholder="<?php echo $allDrivers[$i]->cin; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">La date de son embauche</label>
                                                                <div class="col-md-9">
                                                                    <input type="date" min="0" name="dateembauche" class="form-control">
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
                                <div class="modal fade" id="remove<?php echo $i; ?>" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="color:red">Licenciement</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p> Etes-vous sûr de vouloir licencier ce chauffeur ? </p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="<?php echo base_url(); ?>chauffeur/supprimerChauffeur?idchauffeur=<?php echo  $allDrivers[$i]->idchauffeur; ?>" class="btn btn-danger">Oui</a>
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Non</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                    <?php } ?>                                                                                                                                

                        </div>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
  
