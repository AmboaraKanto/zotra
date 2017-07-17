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
                            Insertion d'un nouvel administrateur
                        </div>
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="section">
                                    <div class="section-title">Les informations correspondantes</div>
                                    <div class="section-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Son nom</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Rabe-harinoro" name="nom" required>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Son prénom</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Amboara" name="prenom" required>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Son mail</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" placeholder="rabe.amboara@gmail.com" name="email" required>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label class="control-label">La coopérative</label> 
                                                <p class="control-label-help">celle à administrer</p>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="select2" name="coopérative" required>
                                                    <option value="1">Cotisse</option>
                                                    <option value="2">Sonatra</option>
                                                    <option value="2">Vatsy</option>
                                                </select>
                                            </div>
                                        </div>                                                                             
                                    </div>
                                </div>                              
                                <div class="form-footer">
                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-success">Confirmer</button>                                          
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
