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
                            Insertion de nouvelle coopérative
                        </div>
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="section">
                                    <div class="section-title">Les informations correspondantes</div>
                                    <div class="section-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Son nom</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Anjara trans" name="nom" required>
                                            </div>
                                        </div>                                                                          
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label class="control-label">La date d'opération</label> 
                                                <p class="control-label-help">Indique à partir de quand la nouvelle coopérative sera opérationnelle</p>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="input-group">                                                   
                                                    <input type="date" name="dateoperation" required>
                                                </div>
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
