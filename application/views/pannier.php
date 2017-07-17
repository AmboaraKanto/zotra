
<div id="body">
    <div class="header">
        <div class="container-fluid">   
            
            <div class="row">
            <div class="col-md-12">
                <div class="resultat">
                    <h1 style="padding-top:3%">
                       Vos reservations
                    </h1>
                  
                   <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <!-- <th></th> -->
                                <th>Date </th>
                                <th>Place reserve</th>
                                <th>Prix Unitaire</th>
                                <th>Total</th>
                                <th>Statut</th>    
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0;$i<5;$i++) {?>

                               <tr>
                                    <!-- // <td><?php echo $allBus[$i]->idbus;?></td> -->
                                    <td><?php echo "20 juin 2017";?></td>
                                    <td><?php echo "2";?></td>
                                    <td><?php echo "3 000Ar";?></td>
                                    <td><?php echo "6 000Ar";?></td>
                                    <td><?php echo "Confirme";?></td>
                                  
                                    <td>
                                        <a  href="#"><span class="fa fa-money" style="font-size:20px;color:blue;"> </span></a>
                                        <a  href="#"><span class="fa fa-check" style="font-size:20px;color:green;margin-left:10px;"> </span></a> 
                                          <a  href="#"><span class="fa fa-remove" style="font-size:20px;color:red;margin-left:10px;"> </span></a>                                            
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><span style="color:red;"><b>TOTAL</b></span></td>
                                    <td><span style="color:red;"><b>40 0000 Ar</b></span></td>

                                    <td></td>
                                    
                                 
                                    <td>
                                                                                   
                                    </td>
                                </tr>
                        </table>
                   </div>
                   </div>
                </div>
            </div>
            <div class="row">
                <a class="btn btn-lg btn-info" data-target="#paiement" data-toggle="modal" style="font-weight:bold;float:right;" href="#"><i class="fa fa-money"></i> Valider vos reservation</a>
            </div>
            <!-- modal paiement -->
             <div class="modal fade" id="paiement" role="dialog" >
                            <div class="modal-dialog" style="width:70em;">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title" style="font-weight:bold;font-size:20px;color:">Choissisez votre mode de paiement</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <form role="form" method="post" action="#">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Numero de telephone</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="marque" class="form-control" placeholder="Mercedes sprinter">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Mode de paiement</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="vola">
                                                                <option>Airtel Money</option>
                                                                <option>Orange Monet</option>
                                                                <option>MVola</option>
                                                            </select>
                                                            <!-- <input type="text" name="numero" class="form-control" placeholder="<?php echo $allBus[$i]->matricule; ?>"> -->
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label">Reference de paiement</label>
                                                        <div class="col-md-9">
                                                           
                                                            <input type="text" name="ref" class="form-control" placeholder="Réference de paiement">
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:30px;">
                                                <span style="color:red;margin-top:30px;text-align:center;margin-left:7em;"><b>Montant a payer: 20 000 Ar</b></span>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <img style="width:120px;height:120px;" src="<?php echo base_url();?>assets/images/telma.jpg">
                                            </div>
                                            <div class="col-md-4">
                                                <img style="width:120px;height:120px;" src="<?php echo base_url();?>assets/images/airtel-money.jpg">
                                            </div>
                                            <div class="col-md-4">
                                          <img style="width:120px;height:120px;" src="<?php echo base_url();?>assets/images/orange.png">

                                            </div>
                                          
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Modifier</button>
                                    </div>
                                </div>

                            </div>
                        </div>

        </div>
    </div>
</div>