<html>
    <?php include('header.php'); ?> 
</html>
<body>
    <div class="app app-default">
        <?php include('menu-left-admin.php'); ?>
        <div class="app-container">
            <?php include('navigation.php'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Ajout de nouvelle destination
                        </div>
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="section">
                                    <div class="section-title">Les informations correspondantes</div>
                                    <div class="section-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Le nom</label>
                                             <div class="col-md-9">
                                                 <input type="text" class="form-control" placeholder="Manakara" name="nom" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label class="control-label">L' axe</label>
                                                <p class="control-label-help">Permet de préciser si c'est une route nationale,secondaire ...</p>
                                            </div>
                                            <div class="col-md-9">
                                                 <input type="text" class="form-control" placeholder="RN4" name="axe" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label class="control-label">Le point kilometrique (PK)</label>                                                
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group">                                                   
                                                    <input type="number" min="0" class="form-control" placeholder="485" name="pk" required>
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
        </div>
    </div>
</body>    
