<html>
<body>
  <li><a href="index.php" <?=echoSelectedClassIfRequestMatches("index")?>>Index</a></li>
  <li><a href="Info-over-mij.php" <?=echoSelectedClassIfRequestMatches("Info-over-mij")?>>Info over mij</a></li>
  <li><a href="ov_proj.php" <?=echoSelectedClassIfRequestMatches("ov_proj")?>>Overzicht Projecten</a></li>
  <li><a href="det_proj.php" <?=echoSelectedClassIfRequestMatches("det_proj")?>>Details Projecten</a></li>
  <li><a href="Stage.php" <?=echoSelectedClassIfRequestMatches("Stage")?>>Stage(s)</a></li>
  <li><a href="Contacteer-mij.php" <?=echoSelectedClassIfRequestMatches("Contacteer-mij")?>>Contacteer mij</a></li>
  <?php
  function echoSelectedClassIfRequestMatches($requestUri)
  {
      $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

      if ($current_file_name == $requestUri)
          echo 'class="selected"';
  }
  ?>
</body>
</html>
