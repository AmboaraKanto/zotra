
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Ajout de nouveau bus
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url();?>bus/creation_bus" class="form form-horizontal">
                    <div class="section">
                        <div class="section-title">Les informations du nouveau bus</div>
                        <div class="section-body">
                            <?php if($error_message!=null){?>
                            <div class="alert alert-danger"><?php echo $error_message;?></div>
                            <?php } ?>
                            <div class="form-group">
                                <label class="col-md-3 control-label">La marque</label>
                                <div class="col-md-9">
                                    <select class="select2" name="marque" required>
                                        <?php foreach ($allMarque as $row) {?>
                                           <option value="<?php echo $row->libelle;?>"><?php echo $row->libelle;?></option>
                                        ?<?php } ?>
                                        
                                        <!-- <option value="2">Mazda eclipse</option>
                                        <option value="2">Boeing</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">Le numero matricule</label>
                                    <p class="control-label-help">Assurez-vous d'entrer le numero dans la carte grise</p>
                                </div>
                                <div class="col-md-9">
                                     <input type="text" class="form-control" required placeholder="1148 TBF" name="matricule">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">La consommation</label>
                                    <p class="control-label-help">Au litre par 100 km</p>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">                                                   
                                        <input type="number" min="0" required class="form-control" placeholder="11" name="consommation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">L'état de votre voiture</label> 
                                    <p class="control-label-help">(sur 10)</p>
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">                                                   
                                        <input type="number" min="0" max="10" required class="form-control" placeholder="8" name="etat" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">Le nombre de places assises</label>                                         
                                </div>
                                <div class="col-md-9">
                                    <div class="input-group">                                                   
                                        <input type="number" min="0" max="32" required class="form-control" placeholder="20" name="nbrdeplace" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label">La date de sortie de votre voiture</label>     
                                    <p class="control-label-help">référencez-vous à la carte grise</p>
                                </div>
                                <div class="col-md-1">
                                    <div class="input-group">                                                   
                                        <input type="date" class="form-control" required name="datesortie" required>
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
