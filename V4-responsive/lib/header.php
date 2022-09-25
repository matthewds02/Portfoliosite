<nav class="clearfix topnav">
	<ul>
		<div id="mylinks">
			<li class="nav-item">
				<a href="index.php" <?=echoSelectedClassIfRequestMatches("index")?>>Homepage</a>
			</li>
			<li class="nav-item">
				<a href="Info-over-mij.php" <?=echoSelectedClassIfRequestMatches("Info-over-mij")?>>Info over mij</a>
			</li>
			<li class="nav-item">
				<a href="ov_proj.php" <?=echoSelectedClassIfRequestMatches("ov_proj")?>>Overzicht Projecten</a>
			</li>
			<li class="nav-item">
				<a href="det_proj.php" <?=echoSelectedClassIfRequestMatches("det_proj")?>>Details Projecten</a>
			</li>
			<li class="nav-item">
				<a href="Stage.php" <?=echoSelectedClassIfRequestMatches("Stage")?>>Stage(s)</a>
			</li>
			<li class="nav-item">
				<a href="Contacteer-mij.php" <?=echoSelectedClassIfRequestMatches("Contacteer-mij")?>>Contacteer mij</a>
			</li>
		</div>
	</ul>
	<a href="javascript:void(0);" class="icon" onclick="navToggle()">
		<i class="fa fa-bars"></i>
	</a>
</nav>

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


<?php
function echoSelectedClassIfRequestMatches($requestUri)
{
	$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	if ($current_file_name == $requestUri)
		echo 'class="selected"';
}
?>
