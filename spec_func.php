<?php

  require_once 'cls.operations.php';
  $db = new Operations();

  if($_GET['type'] == 'submitFeedback'){
    unset($_REQUEST['type']);
    $db->insertSingleRow('feedback', $_REQUEST);
  }

  if($_GET['type'] == 'emailSend'){
    $arr = explode('/', $_GET["file"]);
    $db->sendEmail('PDF File from DOST-8 Information Kiosk', 'DOST-8 Information Kiosk', $_GET['emailAdd'], $_GET['file'], $arr[2]);
  }
 ?>
