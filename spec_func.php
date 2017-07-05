<?php
echo phpinfo();
die;
// connect to mongodb
$m = new MongoClient();
echo "Connection to database successfully";
// select a database
$db = $m->mydb;
echo "Database mydb selected";

die;
  require_once 'cls.database.php';
  $db = new Database();

  if($_GET['type'] == 'submitFeedback'){
    unset($_REQUEST['type']);
    $db->insertSingleRow($_REQUEST, ' feedback');
  }
 ?>
