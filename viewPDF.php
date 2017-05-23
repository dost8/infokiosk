<?php
  header("Content-type: application/pdf");
  header("Content-Disposition: inline; filename=".$_GET['file']);
  @readfile($_GET['file']);
 ?>
