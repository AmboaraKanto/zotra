
		<div id="body">
			<div class="header">
				<div class="row">	
					<div class="col-md-3">
						<div class="recherche" style="padding-top:15%">
							<form action="#" method="POST">
								<label>Depart</label>
								<select class="select2" name="depart">
										
											<option>Antananarivo</option>
											<option>Antsirabe</option>
											<option>Toliara</option>
											<option>Diégo</option>
										
								</select>
								<!-- <input class="form-control" type="text" name="depart" placeholder="Le lieu de départ" required><br/> -->
								<label>Arrivée</label>
								<select class="select2" name="arrivee">
										
											<option>Antananarivo</option>
											<option>Antsirabe</option>
											<option>Toliara</option>
											<option>Diégo</option>
										
								</select>
								<!-- <input class="form-control" type="text" name="arrivee" placeholder="Le lieu d'arrivée" required><br/> -->
								<label>Date</label>
								<input class="form-control" type="date" name="date" placeholder="Date de depart" required><br/>
								<label>Type de voiture</label>
								<select class="select2" name="marque">								
									<option>Mercendes Sprinter</option>
									<option>Mazda eclipse</option>
									<option>Boeing</option>
								</select><br/>
								<label>Prix</label>
								<div class="row">
									<div class="col-md-6">
										<b>min</b>
										<input type="number" min="0">
									</div>
									<div class="col-md-6">
										<b>max</b>
										<input type="number" min="0">
									</div>
								</div>
								<label>La coopérative</label>
								<select class="select2" name="marque">								
									<option>Vatsy</option>
									<option>Cotisse</option>
									<option>Sonatra</option>
								</select><br/>
								<label>Places restantes</label><br/>
									<div class="row">
									<div class="col-md-6">
										<b>min</b>
										<input type="number" min="0">
									</div>
									<div class="col-md-6">
										<b>max</b>
										<input type="number" min="0">
									</div>
								</div><br/>
								<button class="btn btn-lg btn-success">Trouver</button>
							</form>
						</div>
					</div>				
					<div class="col-md-9 col">
						<div class="resultat">
							<h1 style="padding-top:3%">
								Resultat de votre recherche
							</h1>
							<?php if($erreur!=null){ ?>
							<div class="alert alert-danger">
								<strong><?php echo $erreur->getMessage(); ?></strong> 
							</div>
							<?php } ?>
							<ul class="well">
								<?php for($i=0;$i<count($trajets);$i++){ ?>
								<li style="margin-top:30px;">
									<div class="row">
										<div class="col-md-4"><a href="<?php echo base_url(); ?>detail"><img src="<?php echo site_url(); ?>/assets/images/voiture.png" alt=""></a></div>
										<div class="col-md-4"><h1><?php echo $trajets[$i]->cooperative; ?></h1></div>
										<div class="col-md-4"><h1><?php echo $trajets[$i]->tarif; ?> Ar</h1></div>
										<div>
											<p><i class="fa fa-calendar" style="color:cadetblue"></i> <?php echo $trajets[$i]->datedepart; ?> a <?php echo $trajets[$i]->heuredepart; ?></p>
											<p><i class="fa fa-map-marker" style="color:mediumvioletred"></i>&nbsp; Depart: Ambodivona, <?php echo $trajets[$i]->source; ?></p>
											<p><i class="fa fa-flag" style="color:green"></i> Arrivee: Gare routiere, <?php echo $trajets[$i]->destination; ?></p>
											<p><i class="fa fa-users" style="color:red"></i> Place restantes: <?php echo $trajets[$i]->libre; ?></p>
										</div>
										<a href="<?php echo base_url(); ?>trajet/detail/<?php echo $trajets[$i]->idtrajet; ?>" class="more btn btn-lg">Detail</a>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>