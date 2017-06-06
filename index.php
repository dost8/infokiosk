<?php
  require_once 'modal.php'; ?>
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
    <script src="https://www.gstatic.com/firebasejs/4.1.1/firebase.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyC0y3YbcNmqMR0Y38mtck-thuSn1AozbpY",
        authDomain: "info-kiosk-5e36a.firebaseapp.com",
        databaseURL: "https://info-kiosk-5e36a.firebaseio.com",
        projectId: "info-kiosk-5e36a",
        storageBucket: "info-kiosk-5e36a.appspot.com",
        messagingSenderId: "973228578765"
      };
      firebase.initializeApp(config);
    </script>
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
