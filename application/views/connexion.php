<script src="<?php echo site_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo site_url(); ?>assets/js/parsley.min.js" type="text/javascript"></script>
<script src="<?php echo site_url(); ?>assets/js/parsFR.js" type="text/javascript"></script>
<style type="text/css">
    .parsley-errors-list li.parsley-required
    {
      color: #FF0000 ;
    }
</style>

    <div class="app app-default" >

<div class="app-container app-login1" >
  <div class="flex-center" style="margin-top:50px;margin-bottom:50px;">
    <div class="app-header"></div>
    <div class="app-body">
      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>
      <div class="app-block" style="margin-top:35px">
        <div class="app-right-section">
          <div class="app-brand"><span class="highlight">Connexion</span> ZOTRA </div>
          <div class="app-info">
            
            <ul class="list">
              <li>
                <div class="icon">
                  <i class="fa fa-road" aria-hidden="true"></i>
                </div>
                <div class="title">Profitez de votre <b>Voyage</b></div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-bus" aria-hidden="true"></i>
                </div>
                <div class="title">Reservez en toute <b>Securité</b></div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-money" aria-hidden="true"></i>
                </div>
                <div class="title">Moyen de paiement <b>facile et securisé</b></div>
              </li>
            </ul>
            <div class="row">
              <img style="width:120px;height:120px;" src="<?php echo base_url();?>assets/images/telma.jpg">
              <img style="width:120px;height:120px;" src="<?php echo base_url();?>assets/images/airtel-money.jpg">
              <img style="width:120px;height:120px;" src="<?php echo base_url();?>assets/images/orange.png">
            </div>
            
          </div>
        </div>
        <div class="app-form">
          <?php if($error_message!=null){?>
             <div class="alert alert-danger">
              <label><?php echo $error_message?></label>
            </div>
          <?php } ?>
         
          <div class="form-suggestion">
            Connectez-vous.
          </div>
          <form class="demo-form" data-parsley-validate="" action ="<?php echo base_url();?>client/connexion" method="GET">

               <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon3" id="email" data-parsley-required="true">
              </div>

               <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Mot de passe" name="motdepasse" aria-describedby="basic-addon3" id="mdp" data-parsley-required="true">
              </div>

               <div class="text-center">
                  <input type="submit" class="btn btn-success btn-submit" value="Se connecter" id="sub">
              </div>
             
          </form>
           <div class="form-line">
                <div class="title">OU</div>
            </div>
            <div class="form-footer">
                <button type="button" class="btn btn-default btn-sm btn-social __facebook">
                    <div class="info">
                        <i class="icon fa fa-facebook-official" aria-hidden="true"></i>
                        <span class="title">Se connecter avec Facebook</span>
                    </div>
                </button>
            </div>
          <div class="form-line">
          <div class="title" style="width: 216px;">Si vous n'êtes pas encore membre</div>
        </div>
        <div class="form-footer">
        
              <a class="btn btn-info btn-submit" href="<?php echo base_url() ?>client/inscription">Inscrivez-vous ici</a>
            
        </div>
        </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>
  <script>
$('#sub').click(function(){
  $('#email').each(function() {
  if($(this).val() == '') {
  $(this).css('border-color' , '#FF0000');
  //$(this).attr("placeholder", "Required");
   }
   });

   $('#mdp').each(function() {
  if($(this).val() == '') {
  $(this).css('border-color' , '#FF0000');
  //$(this).attr("placeholder", "Required");
   }
   });
 </script>