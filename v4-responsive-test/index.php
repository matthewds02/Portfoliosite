<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Info over mij</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link type="text/css" rel="stylesheet" href="lib/stylesheet-php.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	</head>
	<body>
		<header class="site-header">
			<div class="container-fluid">
				<nav class="clearfix topnav">
					<?php include 'lib/header.php';?>
					<a href="javascript:void(0);" class="icon" onclick="navToggle()">
						<i class="fa fa-bars"></i>
					</a>
				</nav>
            </div>
		</header>
		<div class="flex-container">
			<main>
				<h1>Homepage</h1>
				<p>Ik ben Matthew De Schepper, geboren op 20/12/2002 te Brasschaat.</p>
				<p>Ik ben een student in Graduaat programmeren aan Thomas More de Hogeschool in Antwerpen.</p>
				<p>Op de volgende pagina's zult u meer informatie over mij en projecten waaraan ik gewerkt heb kunnen vinden.</p>
			</main>
		</div>
		<script>
			function navToggle() {
			var x = document.getElementById("myLinks");
        	if (x.style.display === "block") {
				x.style.display = "none";
        	} else {
            	x.style.display = "block";
        	}
    	}
	</script>
	</body>
</html>
