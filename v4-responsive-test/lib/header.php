<ul>
	<div id="mylinks">
		<li class="nav-item">
			<a class="nav-link active" aria-current="true" href="index.php" <?=echoSelectedClassIfRequestMatches("index")?>>Homepage</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="true" href="Info-over-mij.php" <?=echoSelectedClassIfRequestMatches("Info-over-mij")?>>Info over mij</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="true" href="ov_proj.php" <?=echoSelectedClassIfRequestMatches("ov_proj")?>>Overzicht Projecten</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="true" href="det_proj.php" <?=echoSelectedClassIfRequestMatches("det_proj")?>>Details Projecten</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="true" href="Stage.php" <?=echoSelectedClassIfRequestMatches("Stage")?>>Stage(s)</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="true" href="Contacteer-mij.php" <?=echoSelectedClassIfRequestMatches("Contacteer-mij")?>>Contacteer mij</a>
		</li>
	</div>
</ul>

<?php
function echoSelectedClassIfRequestMatches($requestUri)
{
	$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	if ($current_file_name == $requestUri)
		echo 'class="selected"';
}
?>
