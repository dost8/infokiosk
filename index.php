<?php
  require_once 'cls.operations.php';
  $operation = new Operations();
  require_once 'modal.php' ;
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DOST 8 Interactive Information Kiosk</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/slick.css">
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <link rel="stylesheet" href="js/orgchart/css/jquery.orgchart.css">

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <!-- <script type="text/javascript" src="js/pdfObject.js" charset="utf-8"></script> -->
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/angular-route.min.js"></script>
    <script type="text/javascript" src="js/idle.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/datatable.min.js"></script>
    <script type="text/javascript" src="js/orgChart/js/jquery.orgchart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.bundle.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/master.js" ></script>
    <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
  </head>

  <body ng-app="myApp" style="width:99%;">
    <div class="row">
      <div class="menu menu1" onclick="toggleMenu()" style="margin-left:11%;">
        <img src="images/clipart/menu.png" alt="" height="50"> Menu
      </div>
      <div class="inetCheck" style="width:3%;">
        <i class="fa fa-wifi fa-3x"></i>
        <span class="tooltiptext"></span>
      </div>
      <div class="updateCheck" onclick="$.fn.checkUpdateStatus()">
        <img src="images/clipart/load.gif" style="height:50px;margin:44px 105px;">
        <span class="tooltiptext" style="margin:48px 33px;">Checking for updates.</span>
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
