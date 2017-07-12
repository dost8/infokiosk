<?php

// connect to mongodb
// $m = new MongoClient();
// echo "Connection to database successfully";
// select a database
// $db = $m->mydb;
// echo "Database mydb selected";

  require_once 'cls.operations.php';
  $db = new Operations();

  if($_GET['type'] == 'submitFeedback'){
    unset($_REQUEST['type']);
    $db->insertSingleRow('feedback', $_REQUEST);
  }
 ?>
