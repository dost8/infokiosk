<?php
  require_once 'cls.operations.php';
  ini_set('max_execution_time',0);
  $op = new Operations();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>DOST-8 Information Kiosk Online</title>

     <link rel="stylesheet" href="css/bootstrap.css">

     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.bundle.min.js" charset="utf-8"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" charset="utf-8"></script>

     <style media="screen">
       #myCharts{
         height : 420px;
         width : 430px;
       }
     </style>
   </head>
   <body>
     <div class="wrapper">
       <nav class="navbar navbar-default navbar-static-top" style="margin-bottom:0">
         <a class="navbar-brand" href="#">Online Monitoring of Information Kiosks</a>
       </nav>

       <div class="row" style="padding:0px 30px;">
         <div>
           <h2>Feedback Monitoring</h2>
           <?php
            $lguList = $op->selectQuery('SELECT DISTINCT lgu FROM feedbacks');
            ?>
            <div class="col-md-1">
              <label><b>Municipality</b></label>
              <select class="lguSelect" name="">
                <?php foreach($lguList as $key => $value): ?>
                  <option value="<?=$value['lgu']?>"><?=$value['lgu']?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="col-md-6 div-chart">
            </div>
         </div>
       </div>
     </div>
   </body>
   <script type="text/javascript">
    $(document).ready(function(){
      $('.lguSelect').on('change',function(){
        $('.div-chart').html('loading screen');
        $.ajax({
          url : 'spec_func.php',
          data : 'type=chart&lgu='+$(this).val()
        }).done(function(r){
          $('.div-chart').html(r);
        });
      })
    });
   </script>
 </html>
