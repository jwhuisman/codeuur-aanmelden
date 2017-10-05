<!DOCTYPE html>
<!-- Voor de ICT studenten; Hier is niets te halen, gewoon even door blijven zoeken  :) -->
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>Aanmelden projecteam Codeuur Drechtsteden</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="/scripts.js?check=<?=time()?>"></script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css?check=<?=time()?>" type="text/css">
	</head>
	<body>
		<main class="container">
			<header>
				<h1>Aanmeldfomulier</h1>
				<p>LET OP: Het team wordt pas opgeslagen als er op Team inschrijven is geklikt!</p>
			</header>
			<div class="row">
				<aside class="col-md-3">
						<h2>Teamleden</h2>
						<div id="teammembers">
						</div>
						<button id="teamBtn" class="btn btn-success" onClick="submitTeam();"><i class="fa fa-arrow-right"></i> Team inschrijven</button>
				</aside>

				<section class="col-md-9">
					<h2>Teamlid toevoegen</h2>
					<form id="newMemberFrm" action="#" onsubmit="event.preventDefault(); submitForm();">
						<div class="col-md-6">
						<div class="form-group">
						    <label>Studentnummer</label>
						    <input type="text" class="form-control required" name="student_id" placeholder="Studentnummer">
						</div>
						<div class="form-group">
						    <label>Voornaam</label>
						    <input type="text" class="form-control required" name="first_name" placeholder="Voornaam">
						</div>
						<div class="form-group">
						    <label>Achternaam</label>
						    <input type="text" class="form-control required" name="last_name" placeholder="Achternaam">
						</div>
						<div class="form-group">
						    <label>E-mailadres</label>
						    <input type="text" class="form-control required" name="email" placeholder="E-mailadres">
						</div>
						<div class="form-group">
						    <label>Telefoonnummer</label>
						    <input type="text" class="form-control required" name="phone" placeholder="Telefoonnummer">
						</div>
						<div class="form-group">
						    <label><input type="checkbox" name="contact_to_school" id="contact_to_school" checked="checked"> </label> Mijn contactgegevens mogen aan de basisschool worden doorgegeven
						</div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
						    <label>Over mij</label>
						   <textarea class="form-control required" name="about" rows="7"></textarea>
						</div>
						<div class="form-group">
						    <label>Waarom jouw opleiding</label>
						   <textarea class="form-control required" name="study" rows="7"></textarea>
						</div>
						</div>
						<button class="btn btn-success pull-right" id="saveBtn"><i class="fa fa-save"></i> Toevoegen</button>
					</form>
				</section>
			</div>

		</main>
	</body>
</html>