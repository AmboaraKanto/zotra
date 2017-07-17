<script>
		
	</script>
		
<style type="text/css">
  @import url(<?php echo site_url(); ?>assets/css/normalize.css);
  /*@import url(<?php echo site_url(); ?>assets/css/demo.css);*/
  @import url(<?php echo site_url(); ?>assets/css/component.css);
</style>
		<div id="body">
			<div class="header">
					
						<div class="info" style="">
							<h1 style="padding-top:3%">
								Informations du trajet
							</h1>
							<div class="row">
								<div class="col-md-4"> 
 <div class="plan plan--show">
        <form action="<?php echo base_url() ?>trajet/reservation" method="post">
			<input type="hidden" name="placebus" value="<?php echo $detail->nbrplace; ?>">
			<input type="hidden" name="idtrajet" value="<?php echo $detail->idtrajet; ?>">
			<h3 class="plan__title">Choisissez vos sieges</h3>
			<div class="rows rows-mini">
			<?php for($i=count($places)-1;$i>2;$i-=4){ ?>
				<div class="row-tix">
                    <div class="row__seat tooltip seza" id="<?php echo $places[$i]->classe; ?>"><p><?php echo $places[$i]->numero; ?></p><input type="checkbox"  value="<?php echo $places[$i]->idplace; ?>" name="c<?php echo $i; ?>" class="caca"/></div>
                    <div class="row__seat tooltip seza" id="<?php echo $places[$i-1]->classe; ?>"><p><?php echo $places[$i-1]->numero; ?></p><input type="checkbox" value="<?php echo $places[$i-1]->idplace; ?>" name="c<?php echo $i-1; ?>" class="caca"/></div>
                    <div class="row__seat tooltip seza" id="<?php echo $places[$i-2]->classe; ?>"><p><?php echo $places[$i-2]->numero; ?></p><input type="checkbox" value="<?php echo $places[$i-2]->idplace; ?>" name="c<?php echo $i-2; ?>" class="caca"/></div>
                    <div class="row__seat tooltip seza" id="<?php echo $places[$i-3]->classe; ?>"><p><?php echo $places[$i-3]->numero; ?></p><input type="checkbox" value="<?php echo $places[$i-3]->idplace; ?>" name="c<?php echo $i-3; ?>" class="caca"/></div>
				</div>
			<?php } ?>

				<div class="row-tix">
					<div class="row__seat tooltip seza" id="<?php echo $places[1]->classe; ?>"><p>2</p><input type="checkbox" value="<?php echo $places[1]->idplace; ?>" name="c1" class="caca"/></div>                  
				 	<div class="row__seat tooltip seza" id="<?php echo $places[0]->classe; ?>"><p>1</p><input type="checkbox" value="<?php echo $places[0]->idplace; ?>" name="c0" class="caca"/></div>
                    
                    
				<div class="row__seat tooltip" data-tooltip seza="Chauffeur" id="ta3">chauffeur</div>
					
				</div>	
			</div>
            <ul class="legend">
				<li class="legend__item legend__item--free">Libre</li>
				<li class="legend__item legend__item--reserved">Occupee</li>
				<li class="legend__item legend__item--selected">Selectionnee</li>
			</ul>
			<button class="action action--buy">Reservez mes places</button>
		<input type="button" class="action action--lookaround action--disabled" arial-label="Unlook View"></button>
        </form>
		</div><!-- /plan -->

								</div>
								<div class="col-md-4"> 
									<ul class="timeline" style="padding-right:25%">
										<li>
											<div class="timeline-badge"><i class="fa fa-flag"></i></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h4 class="timeline-title" style="height:30px;width:350px;padding-top:3%;padding-left:5% "><?php echo $detail->source; ?></h4>											
													</div>												
												</div>
										</li>
										<li>
											<div class="timeline-badge warning"><i class="fa fa-stop"></i></div>         								
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h4 class="timeline-title" style="height:30px;width:350px;padding-top:3%;padding-left:5% "><?php echo $detail->destination; ?></h4>												
													</div>												
												</div>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul>
										<li> 
											<div class="row">										
												<div>
													<p><i class="fa fa-user" style="color:cadetblue"></i> <?php echo $detail->nom." ".$detail->prenom; ?></p>
													<p><i class="fa fa-bus" style="color:cadetblue"></i> <?php echo $detail->cooperative." ".$detail->matricule; ?></p>
													<p><i class="fa fa-map-marker" style="color:mediumvioletred"></i>&nbsp; Depart: Ambodivona, <?php echo $detail->source; ?></p>										
													<p><i class="fa fa-flag" style="color:green"></i> Arrivee: Gare routiere, <?php echo $detail->destination; ?></p>
													<p><i class="fa fa-play-circle"></i> Heure de départ: <?php echo $detail->heuredepart; ?> </p>
													<p><i class="fa fa-users" style="color:red"></i> Place restantes: <?php echo $detail->libre; ?></p>
													<p><i class="fa fa-tag" style="color:red"></i> Tarif: <?php echo $detail->tarif; ?> Ar/place</p>
												</div>									
											</div>
										</li>
									</ul>
								</div>
							</div>
						
						</div>
						
				
			</div>
		</div>
	<script type="text/javascript">
		$(".seza input[type=checkbox]").on("click",function(){
			if($(this).is(":checked")){
				$(this).parent().css("background-image", "url(<?php echo site_url(); ?>assets/png/seat4.png)");  
			}else{
				$(this).parent().css("background-image", "url(<?php echo site_url(); ?>assets/png/seat2.png)"); 
			}
		});
	</script>