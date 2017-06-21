<?php
  require_once 'cls.database.php';
  $db = new Database();

  if($_GET['type'] == 'submitFeedback'){
    unset($_REQUEST['type']);
    $db->insertSingleRow($_REQUEST, 'tbl_feedback');
  }
 ?>
