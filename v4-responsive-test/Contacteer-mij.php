<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contacteer mij</title>
		<link type="text/css" rel="stylesheet" href="lib/stylesheet-php.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	</head>
	<body>
		<header class="site-header">
			<?php include 'lib/header.php';?>
		</header>
		<div class="flex-container">
			<main>
				<h1>Matthew De Schepper</h1>
				<figure id="profielfoto">
					<img src="afbeeldingen/profielfoto.png" alt="Mijn profielfoto" />
				</figure>
				<p><a class="speciallink" href="https://www.linkedin.com/in/matthew-de-schepper">linkedin</a></p>
				<p>Insta: <a class="speciallink" href="https://www.instagram.com/matthew_de_schepper/">matthew_de_schepper</a></p>
				<p>E-mail: test@email.com</p>
				<p>School E-mail: r0903037@student.thomasmore.be</p>
				<p>telefoonnummer: +32499999999</p>
				<p>Nog geen persoonlijke gegevens vermits dit een testproject is.</p>
				<form action="post-demo.php" method="post">
					<fieldset>
						<legend>Persoonlijke gegevens</legend>
						<label for="firstName">Voornaam</label>
						<input type="text" name="Voornaam" id="firstName" /><br />
						<label for="lastName">Familienaam</label>
						<input type="text" name="Familienaam" id="lastName" /><br />
						<label for="email">E-mail</label>
						<input type="email" name="E-mail" id="email" />
					</fieldset>
					<fieldset>
						<legend>Uw vraag</legend>
						<label for="questionType">Soort vraag</label>
						<select name="Type-vraag" id="questionType">
						<option value="algemeen">Algemene vraag</option>
						<option value="offerte">Offerte aanvragen</option>
						<option value="andere">Andere vraag</option></select
						><br />
						<label for="question">Uw vraag</label>
						<textarea name="Vraag" id="question" cols="30" rows="10"></textarea>
					</fieldset>
					<label for="newsletter">Onze nieuwsbrief ontvangen?</label>
					<input
						type="checkbox"
						name="Nieuwsbrief"
						id="newsletter"
						value="ja"
					/><br />
					<input type="submit" value="Verstuur" />
				</form>
			</main>
		</div>
	</body>
</html>
