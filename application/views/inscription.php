<!--<script src="<?php echo site_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>-->
<script src="<?php echo site_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo site_url(); ?>assets/js/parsley.min.js" type="text/javascript"></script>
<script src="<?php echo site_url(); ?>assets/js/parsFR.js" type="text/javascript"></script>
<style type="text/css">
    .parsley-errors-list li.parsley-required
    {
      color: #FF0000 ;
    }

     .parsley-errors-list li.parsley-equalto
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
      <div class="app-block">
        <div class="app-right-section">
          <div class="app-brand"><span class="highlight">Inscrpition</span> ZOTRA </div>
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
              <img style="width:120px;height:120px;" src="<?php base_url();?>../assets/images/telma.jpg">
              <img style="width:120px;height:120px;" src="<?php base_url();?>../assets/images/airtel-money.jpg">
              <img style="width:120px;height:120px;" src="<?php base_url();?>../assets/images/orange.png">
            </div>
            
          </div>
        </div>
        <div class="app-form">
          <div class="form-suggestion">
            Créer un compte gratuitement.
          </div>
          <form action="<?php echo base_url();?>client/inscription" method="POST" data-parsley-validate="">
              <!-- <div class="input-group"> -->
                <?php if($error_message!=null){?>
                <div class="alert alert-danger"><?php echo $error_message;?></div>
                <?php } ?>
              <!-- </div> -->
             
               <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom" aria-describedby="basic-addon1" data-parsley-required="true">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">
                  <i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Prenom" name="prenom" id="prenom" aria-describedby="basic-addon2" data-parsley-required="true">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-gg" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Numéro CIN"  name="cin" id="cin" aria-describedby="basic-addon3"  data-parsley-required="true" data-parsley-maxlength="12"> 
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-phone" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Contact" name="contact" id="contact" aria-describedby="basic-addon3"  data-parsley-required="true" data-parsley-maxlength="10">
              </div>
               <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" aria-describedby="basic-addon3"  data-parsley-required="true">
              </div>
               <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Mot de passe" id="pass" name="mdp" aria-describedby="basic-addon3"  data-parsley-required="true">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon4">
                  <i class="fa fa-check" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="mdp2" id="mdp2" placeholder="Confirmation de mot de passe" aria-describedby="basic-addon3"  data-parsley-equalto="#pass">
              </div>
              <div class="text-center">
                  <input type="submit" class="btn btn-success btn-submit" value="S'inscrire" id="sub">
              </div>
          </form>
          <div class="form-line">
          <div class="title" style="width: 216px;">Si vous n'êtes déjà membre</div>
        </div>
        <div class="form-footer">
        
              <a class="btn btn-info btn-submit" href="<?php echo base_url() ?>connexion">Connectez-vous ici</a>
            
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
      $('#nom').each(function() {
        if($(this).val() == '') {
          $(this).css('border-color' , '#FF0000');
          //$(this).css('color' , '#FF0000');
          //$(this).attr("span", "Ce champ est requis");
        }
      });

      $('#prenom').each(function() {
        if($(this).val() == '') {
          $(this).css('border-color' , '#FF0000');
          //$(this).attr("placeholder", "Required");
        }
       });

      $('#contact').each(function() {
        if($(this).val() == '') {
          $(this).css('border-color' , '#FF0000');
          //$(this).attr("placeholder", "Required");
         }
      });

      $('#email').each(function() {
        if($(this).val() == '') {
          $(this).css('border-color' , '#FF0000');
          //$(this).attr("placeholder", "Required");
        }
      });

      $('#cin').each(function() {
        if($(this).val() == '') {
          $(this).css('border-color' , '#FF0000');
          //$(this).attr("placeholder", "Required");
        }
      });

      $('#pass').each(function() {
        if($(this).val() == '') {
          $(this).css('border-color' , '#FF0000');
          //$(this).attr("placeholder", "Required");
        }
      });

      $('#mdp2').each(function() {
        if($(this).val() == '') {
          $(this).css('border-color' , '#FF0000');
          //$(this).attr("placeholder", "Required");
        }
      });
   });
 </script>
