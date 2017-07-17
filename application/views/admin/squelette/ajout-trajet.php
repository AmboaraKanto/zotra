
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Ajout de nouveau trajet
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url();?>trajet/creationTrajet" class="form form-horizontal">
                    <div class="section">
                        <div class="section-title">Les informations du nouveau trajet</div>
                        <?php if($error_message!=null){?>
                            <div class="alert alert-danger"><?php echo $error_message;?></div>
                        <?php } ?>
                        <div class="section-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Le bus concerné</label>
                                <div class="col-md-9">
                                    <select class="select2" name="bus" required>
                                        <?php foreach ($allBus as $row) {?>
                                           <option value="<?php echo $row->idbus;?>"><?php echo $row->matricule;?></option>
                                        <?php } ?>
                                        
                                      
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">Le titulaire</label>
                                    <p class="control-label-help">Le chauffeur en charge du bus</p>
                                </div>
                                <div class="col-md-9">
                                    <select class="select2" name="chauffeur" required>
                                          <?php foreach ($allChauffeur as $row) {?>
                                           <option value="<?php echo $row->idchauffeur;?>"><?php echo $row->nom." ".$row->prenom;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">Le lieu de départ</label>                                      
                                </div>
                                <div class="col-md-9">
                                    <select class="select2" name="source" required>
                                          <?php foreach ($allVille as $row) {?>
                                           <option value="<?php echo $row->libelle;?>"><?php echo $row->libelle;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">Le lieu d'arrivée</label>                                               
                                </div>
                                <div class="col-md-9">
                                    <select class="select2" name="arrivee" required>
                                          <?php foreach ($allVille as $row) {?>
                                           <option value="<?php echo $row->libelle;?>"><?php echo $row->libelle;?></option>
                                        <?php } ?>
                                    </select>                        
                                </div>
                            </div>                      
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">La date de départ</label>                                         
                                </div>
                                <div class="col-md-1">
                                    <div class="input-group">                                                   
                                        <input type="date" class="form-control" name="datedepart" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">L'heure de départ</label>                                                     
                                </div>
                                <div class="col-xs-1">
                                    <div class="input-group">                                                   
                                        <input type="time" class="form-control" name="heuredepart" required>
                                    </div>
                                </div>
                            </div>                                       
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">Le tarif</label>
                                    <p class="control-label-help">en ariary</p>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">                                                   
                                        <input type="number" min="0" class="form-control" placeholder="25 000" name="tarif" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                              
                    <div class="form-footer">
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Enregistrer</button>                                          
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
