<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="lib/stylesheet-php.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<title>Contacteer mij</title>
	</head>
	<body>
		<header class="site-header">
			<?php include 'lib/header.php';?>
		</header>
		<div class="flex-container">
			<main>
				<h1>Je post data</h1>
				<p>Normaal sla je die op in een databank of verstuur je ze in een e-mail, maar als demo ben ik gewoon een echo.</p>
				<pre>
					<?php
					echo
					'Voornaam: ' . htmlspecialchars($_POST["Voornaam"]) . "\n" .
					'Familienaam: ' . htmlspecialchars($_POST["Familienaam"]) . "\n" .
					'E-mail: ' . htmlspecialchars($_POST["E-mail"]) . "\n" .
					'Type vraag: ' . htmlspecialchars($_POST["Type-vraag"]) . "\n" .
					'Vraag: ' . htmlspecialchars($_POST["Vraag"]) . "\n" .
					'Nieuwbrief: ' . htmlspecialchars($_POST["Nieuwsbrief"]);
					?>
				</pre>
			</main>
		</div>
	</body>
</html>
