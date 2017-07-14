<?php
  require_once 'cls.operations.php';
  require_once 'modal.php' ;

  $db = new Operations();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <!-- <script type="text/javascript" src="js/pdfObject.js" charset="utf-8"></script> -->
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/angular-route.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/master.js" ></script>
  </head>
  <body ng-app="myApp">
    <div class="row">
      <div class="menu" onclick="toggleMenu()">
        <img src="images/clipart/menu.png" alt="" height="50"> Menu </i>
      </div>
      <div class="headName">
        <img src="">
        <span></span>
      </div>
    </div>

    <input type="hidden" id="prompt" name="" value="">
    <div class="view" ng-view>

    </div>

  </body>
</html>
