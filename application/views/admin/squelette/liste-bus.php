
<div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">                           
                    Voici la liste des bus de votre flotte
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
                                <th>Marque</th>
                                <th>Matricule</th>
                                <th>Etat (sur 10)</th>
                                <th>En service depuis</th>
                                <th>Consommation (L/100km)</th>
                                <th>Places assises</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0;$i<count($allBus);$i++) {?>

                               <tr>
                                    <td><?php echo $allBus[$i]->idbus;?></td>
                                    <td><?php echo $allBus[$i]->marque;?></td>
                                    <td><?php echo $allBus[$i]->matricule;?></td>
                                    <td><?php echo $allBus[$i]->etat;?></td>
                                    <td><?php echo $allBus[$i]->datesortie;?></td>
                                    <td><?php echo $allBus[$i]->consommation;?></td>
                                    <td><?php echo $allBus[$i]->nbrplace;?></td>
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
                                        <h4 class="modal-title">Modification de bus</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <form role="form" method="post" action="#">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">La marque</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="marque" class="form-control" placeholder="Mercedes sprinter">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Le matricule</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="numero" class="form-control" placeholder="<?php echo $allBus[$i]->matricule; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">L'état (sur 10)</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="etat" min="0" max="10" class="form-control" placeholder="<?php echo $allBus[$i]->etat ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                        
                                                        <label class=" col-md-3 control-label">La date de sortie</label>                                                        
                                                        <div class="col-md-9">
                                                            <input type="date" min="0" name="datesortie" class="form-control" placeholder="<?php echo $allBus[$i]->datesortie; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                        
                                                        <label class="col-md-3 control-label">La consommation</label>                                                        
                                                        <div class="col-md-9">
                                                            <input type="number" min="0" name="consommation" class="form-control" placeholder="<?php echo $allBus[$i]->consommation; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">                                                        
                                                        <label class="col-md-3 control-label">Le nombre de places</label>                                                    
                                                        <div class="col-md-9">
                                                            <input type="number" min="0" name="nbrplace" class="form-control" placeholder="<?php echo $allBus[$i]->nbrplace; ?>">
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
                                        <h4 class="modal-title" style="color:red">Suppression de bus</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p> Etes-vous sûr de vouloir supprimer ce bus ? </p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?php echo base_url() ?>bus/supprimerBus?idbus=<?php echo $allBus[$i]->idbus; ?>" class="btn btn-danger" data-dismiss="modal">Oui</a>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Non</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                           <?php }?>
                           

                </div>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
