
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Ajout de nouveau chauffeur
                        </div>
                        <div class="card-body">
                            <form class="form form-horizontal" method="POST" action="<?php echo base_url() ?>chauffeur/embauche_chauffeur">
                                <div class="section">
                                    <div class="section-title">Les informations du nouveau chauffeur</div>
                                    <div class="section-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Son nom</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Andrianjafy" name="nom" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Son prénom</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Mathieu" name="prenom" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label class="control-label">Son CIN</label>                                                
                                            </div>
                                            <div class="col-md-9">
                                               <input type="text" class="form-control" placeholder="xxx xxx xxx xxx" name="cin" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label class="control-label">La date d'embauche</label>                                                 
                                            </div>
                                            <div class="col-md-1">
                                                <div class="input-group">                                                   
                                                    <input type="date" name="dateembauche" required>
                                                </div>
                                            </div>
                                        </div>                                                                             
                                    </div>
                                </div>                              
                                <div class="form-footer">
                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-success">Embaucher</button>                                          
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
   
