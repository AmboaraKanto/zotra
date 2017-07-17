
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">                           
                            Voici la liste des trajets que vous effectuez
                        </div>
                         <?php if($this->session->flashdata('success_message')){?>
                           <div class="alert alert-success">
                              <strong> <?php echo $this->session->flashdata('success_message');?></strong>
                            </div>
                        <?php }?>
                        <div class="card-body no-padding">
                            <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                                <thead>                              
                                    <tr>
                                        <th>ID</th>
                                        <th>Bus</th>
                                        <th>Source</th>
                                        <th>Destination</th>                                                                         
                                        <th>Date</th>
                                        <th>Heure de départ</th>
                                        <th>Tarif (Ar)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>                             
                                  <?php for($i=0;$i<count($allTrajets);$i++){ ?>
                                    <tr>
                                        <td><?php echo $allTrajets[$i]->idtrajet; ?></td>
                                        <td><?php echo $allTrajets[$i]->matricule; ?></td>
                                        <td><?php echo $allTrajets[$i]->source; ?></td>
                                        <td><?php echo $allTrajets[$i]->destination; ?></td>
                                        <td><?php echo $allTrajets[$i]->datedepart; ?></td>
                                        <td><?php echo $allTrajets[$i]->heuredepart; ?></td>
                                        <td><?php echo $allTrajets[$i]->tarif; ?></td>                                        
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
                                                <h4 class="modal-title">Modification de trajet</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <form role="form" method="post" action="#">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Le bus</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="marque" class="form-control" placeholder="<?php echo $allTrajets[$i]->matricule; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">La source</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="source" class="form-control" placeholder="<?php echo $allTrajets[$i]->source; ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">La déstination</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="destination" class="form-control" placeholder="<?php echo $allTrajets[$i]->destination; ?>" required>
                                                                </div>
                                                            </div>                                                         
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">La date de départ</label>
                                                                <div class="col-md-9">
                                                                    <input type="date" name="datedepart" class="form-control" placeholder="<?php echo $allTrajets[$i]->datedepart; ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">L'heure de départ</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="heuredepart" class="form-control" placeholder="<?php echo $allTrajets[$i]->heuredepart; ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Le tarif (en Ar)</label>
                                                                <div class="col-md-9">
                                                                    <input type="number" name="tarif" class="form-control" placeholder="<?php echo $allTrajets[$i]->tarif; ?>" required>
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
                                                <h4 class="modal-title" style="color:red">Annulation de trajet</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p> Etes-vous sûr de vouloir annuler ce trajet ? </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Oui</button>
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
 