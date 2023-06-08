<h2 class="text-center text-decoration-underline">Effectuer Une Demande</h2>
				<div class="container mt-5">
					<div class="row">
					<div class="">
						<div class="card">
						<div class="card-header">
							<ul class="nav nav-pills card-header-pills">
							<li class="nav-item">
								<a class="nav-link active" id="step1-tab" data-bs-toggle="pill" href="#step1">Step 1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="step2-tab" data-bs-toggle="pill" href="#step2">Step 2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="step3-tab" data-bs-toggle="pill" href="#step3">Step 3</a>
							</li>
							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content">
							<div class="tab-pane fade show active" id="step1">
								<h5>Step 1</h5>
								<form>
								<!-- Step 1 form fields -->
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<label for="typedem" class="form-label fw-bold ms-3">Type Demande :</label>
									<select class="form-select" aria-label="Select option" name="typedem" id="typedem">
										<option selected>Select an option</option>
										@foreach ($typesDemandes as $td)
											<option value="{{$td->id}}">{{$td->label}}</option>
										@endforeach
									</select>
									<span class="text-danger">@error('nom') {{$message}} @enderror</span>
								</div>
								<br>
								<button type="button" class="btn btn-primary" onclick="nextStep('#step2')">Next</button>
								</form>
							</div>
							<div class="tab-pane fade" id="step2">
								<h5>Step 2</h5>
								<form>
									<!-- Step 2 form fields -->
									<div class="row">
										<?php
											// Récupérer la date d'aujourd'hui
											$aujourdhui = new DateTime();

											// Ajouter un mois à la date d'aujourd'hui
											$unMoisPlusTard = clone $aujourdhui;
											$unMoisPlusTard->add(new DateInterval('P1M'));

											// Parcourir les jours entre aujourd'hui et un mois en avance
											$interval = new DateInterval('P1D');
											$periode = new DatePeriod($aujourdhui, $interval, $unMoisPlusTard);
										?>
										<div class="col-md-4">
											<label for="dateChoix" class="form-label fw-bold ms-3"></label>
											<select id="mySelect" class="form-select fw-bold ms-3">
												<option value="">Select a day</option>
												<?php foreach ($periode as $jour) { ?>
													<option 
													value="<?php echo $jour->format('Y-m-d'); ?>">
													<?php echo $jour->format('Y-m-d'); ?></option>
												<?php  } ?>
											</select>
											<br>
											<button class="btn btn-primary" id="myButton">Get Selected Option</button>
										</div>
										<div class="col-md-1"></div>
										<div class="col-md-6" id="containerMachines">
											<!-- Machines  -->
											@foreach ($machines as $m)
											<div classe="container" id="machine{{$m->id}}" style="display:none;">
												<h3>{{$m->label}}</h3>
												<div class="row text-center">
													<div class="col-md-2"></div>
												<?php
													// Afficher les jours et les plages horaires
													foreach ($periode as $jour) {
												?>
													<div id="day<?php echo $jour->format('Y-m-d')?>" class="col-md-8 text-center" style="display:none;">
													<?php
														echo $jour->format('Y-m-d') . '<br>';
														// Définir les plages horaires
														$plagesHoraires = [
															'08:00 - 10:00',
															'10:00 - 12:00',
															'12:00 - 14:00',
															'14:00 - 16:00'
														];
														// Afficher les plages horaires pour chaque jour
														foreach ($plagesHoraires as $plage) {
															echo $plage . '<br>';
														}
														
														echo '<br>'; // Ajouter une ligne vide entre chaque jour
													?>
													</div>
												<?php } ?>
												</div>
											</div>
											@endforeach
										</div>
										<div class="col-md-1"></div>
									</div>
									
									<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
									<script>
										document.getElementById("myButton").addEventListener("click", function(event) {
											event.preventDefault(); // Prevent the default behavior

											// alert("Selected Option:"+text);

											var ev = document.getElementById("typedem");
											var v = ev.options[ev.selectedIndex].value;
											var t = ev.options[ev.selectedIndex].text;
											nbrMachines = document.getElementById('containerMachines').children;
											// alert(nbrMachines.length)
											for (let i=1;i<=nbrMachines.length;i++){
												document.getElementById('machine'+i).style.display = 'none';
											}
											document.getElementById('machine'+v).style.display = '';

											var e = document.getElementById("mySelect");
											var value = e.options[e.selectedIndex].value;
											var text = e.options[e.selectedIndex].text;

											document.getElementById('day'+value).style.display = '';
										});
								</script>
								<br><br>
								<button type="button" class="btn btn-secondary" onclick="prevStep('#step1')">Previous</button>
								<button type="button" class="btn btn-primary" onclick="nextStep('#step3')">Next</button>
								</form>
							</div>
							<div class="tab-pane fade" id="step3">
								<h5>Step 3</h5>
								<form>
								<div class="row">
								<!-- Step 3 form fields -->
								<div class="col-md-1"></div>
								<div class="col-md-5 my-2">
									<label for="prenom" class="form-label fw-bold ms-3">Nombre Echantillons : </label>
									<input type="text" class="form-control border border-dark" name="prenom" value="{{$data->prenom}}">
									<span class="text-danger">@error('prenom') {{$message}} @enderror</span>
								</div>
								<div class="col-md-5 my-2">
									<label for="prenom" class="form-label fw-bold ms-3">Nombre Répétitions : </label>
									<input type="text" class="form-control border border-dark" name="prenom" value="{{$data->prenom}}">
									<span class="text-danger">@error('prenom') {{$message}} @enderror</span>
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-1"></div>
								<div class="col-md-5 my-2">
									<label for="prenom" class="form-label fw-bold ms-3">Nature Echantillons : </label>
									<input type="text" class="form-control border border-dark" name="prenom" value="{{$data->prenom}}">
									<span class="text-danger">@error('prenom') {{$message}} @enderror</span>
								</div>
								<div class="col-md-5 my-2">
									<label for="prenom" class="form-label fw-bold ms-3">Toxicité : </label>
									<input type="text" class="form-control border border-dark" name="prenom" value="{{$data->prenom}}">
									<span class="text-danger">@error('prenom') {{$message}} @enderror</span>
								</div>
								<div class="col-md-1"></div>
								</div>
								<button type="button" class="btn btn-secondary" onclick="prevStep('#step2')">Previous</button>
								<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/js/bootstrap.bundle.min.js"></script>
				<script>
					// Function to navigate to the next step
					function nextStep(nextStepId) {
					$(nextStepId).tab('show');
					}

					// Function to navigate to the previous step
					function prevStep(prevStepId) {
					$(prevStepId).tab('show');
					}
				</script>