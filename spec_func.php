<?php
ini_set('max_execution_time',0);
  require_once 'cls.operations.php';
  $operation = new Operations();
  if($_GET['type'] == 'submitFeedback'){
    unset($_REQUEST['type']);
    $operation->insertSingleRow('feedback', $REQUEST);
  }
  if($_GET['type'] == 'emailSend'){
    $arr = explode('/', $_GET['file']);
    $operation->sendEmail('PDF File from DOST-8 Information Kiosk','DOST-8 Information Kiosk', $_GET['emailAdd'], $_GET['file'], $arr[2]);
  }
  if($_GET['type'] == 'updateKiosk'){
    $result = $operation->execBatchFile('downloadUpdates.bat');
    if(strpos($result, 'Already up-to-date.'))
      echo 'up-to-date';
  }

  if($_GET['type'] == 'checkUpdate'){
    $result = $operation->execBatchFile('checkUpdates.bat');
    echo($result);
  }
?>
