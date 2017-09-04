<?php
ini_set('max_execution_time',0);
  require_once 'cls.operations.php';
  $operation = new Operations();

  if($_GET['type'] == 'submitFeedback'){
    unset($_REQUEST['type']);
    $_REQUEST['chartRate'] = implode($_REQUEST['chartRate']);
    $_REQUEST['date'] = date('Y-m-d');
    $operation->insertSingleRow('feedback', $_REQUEST);
  }
  if($_GET['type'] == 'emailSend'){
    $arr = explode('/', $_GET['file']);
    $operation->sendEmail('PDF File from DOST-8 Information Kiosk','DOST-8 Information Kiosk', $_GET['emailAdd'], $_GET['file'], $arr[2]);
  }
  if($_GET['type'] == 'updateKiosk'){
    $operation->cloud_backup();die;
    $result = $operation->execBatchFile('downloadUpdates.bat');
    if(strpos($result, 'Already up-to-date.'))
      echo '';
  }

  if($_GET['type'] == 'checkUpdate'){
    $result = $operation->execBatchFile('checkUpdates.bat');
    $strCnt = strlen($result);
    if($strCnt > 250){
      echo 'true';
    }else{
      $operation->cloud_backup_force();
    }
  }

  if($_GET['type'] == 'viewChart'){
    $where = ' lgu = "'.$_GET['lgu'].'"';
    if(isset($_GET['date'])){
      $date = explode('--',$_GET['date']);
      #$where .= " AND d"
    }
    $resultKey = ['chartRate','comment','nob','date','d_services','d_services_text'];
    $dataArr = [[],[],[],[],[],[]];
    $result = $operation->selectData("feedbacks", $resultKey, $where, false, true);
    foreach($result as $key => $value){
      for($i=0; $i<count($dataArr); $i++){
        $index = $resultKey[$i];
        array_push($dataArr[$i], $value[$index]);
      }
    }

    // Count the number of ratings
    // Count how many 1s, 2s and etc
    $chartStr = implode($dataArr[0]); //0 is the index for the Charts
    $chartStrCnt = [0,0,0,0,0];
    foreach(range(1,5) as $key => $value){
      $chartStrCnt[$key] = substr_count($chartStr, $value);
    }
    $chartStrCnt = json_encode($chartStrCnt);
    ?>
    <div id="myRateChart" width="556" height="290" style="width:556px;height:355px;"></div>
    <script type="text/javascript">
      var chartStrCnt = <?php echo $chartStrCnt; ?>;
      var label = 'Chart Ratings from '+<?php echo(json_encode($_REQUEST['lgu'])); ?>;

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart); 

      function drawChart(){
        var data = google.visualization.arrayToDataTable([
          ['Chart','Customer Satisfaction Rate'],
          ['Excellent',chartStrCnt[0]],
          ['Very Satisfied',chartStrCnt[1]],
          ['Satisfied',chartStrCnt[2]],
          ['Fair',chartStrCnt[3]],
          ['Poor',chartStrCnt[4]]
        ]);

        var options = {
          title: 'Customer Satisfaction Chart',
          width: 520,
          height: 320
        };

        var chart = new google.visualization.PieChart(document.getElementById('myRateChart'));
        chart.draw(data, options); 
        //  $("#myRateChart rect").attr('height','250px');
      }

    </script>
    <!--BREAK-->
    <?php
      $navBarMain = array_unique($dataArr[4]); //Index 4 is the index for the Services
    ?>

    <style media="screen">
      .myNav{
        padding-left: 15px;
      }
      .myNav > li{
        list-style: none;
        padding:5px;
      }
    </style>

    <div class="panel-group closeall" id="accordion" role="tablist" aria-multiselect="true">
      <div class="panel panel-default">
        <?php
        $navBarMain = array_unique($dataArr[4]); //Index 4 is the index for the Services
        foreach($navBarMain as $key1 => $value1){
          echo '<div class="panel-heading" role="tab" id="heading'.$key1.'" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$key1.'" aria-expanded="true" aria-controls="collapse'.$key1.'">
            <h4 class="panel-title">
              <a role="button" href="#collapse'.$key1.'" onclick="event.preventDefault()">
                '.strtoupper($value1).'
              </a>
            </h4>
          </div>
          <div id="collapse'.$key1.'" class="panel-collapse collapse in" role="tabpanel" aria-labelledBy="heading'.$key1.'">
            <div class="panel-body">';
            foreach($dataArr[4] as $key2 => $value2){
              if($value1 == $value2){
                echo '<p class="btn form-control" style="text-align:left">'.$dataArr[5][$key2].'</p>';
                unset($dataArr[4][$key2]);   unset($dataArr[5][$key2]);
              }
            }
          echo '</div>
          </div>';
        }
         ?>
      </div>
    </div>

    <!--BREAK-->
    <div style="overflow-y:auto">
      <?php
        foreach($dataArr[1] as $key => $value){
          if(strlen($value) > 25)
            $value = substr($value, 0, 20).'...';
          echo "<button class='btn form-control' style='color:black;text-align:left'><img class='' src='images/clipart/blank-dp.png' style='width:20px;margin-right:10px;'>".$value."</button>";
        }
       ?>
    </div>
    <!--BREAK-->
    <?php
      $chartStrCnt = array_count_values($dataArr[2]);
      $data = [[],[]];
      $data[0] = array_keys($chartStrCnt);
      foreach($chartStrCnt as $key => $value){
        array_push($data[1],$value);
      }
     ?>
    <div id="myNobChart" height="210" width="565" style="width:565px;height:210px;"></div>
    <script type="text/javascript">
      var chartStrCnt1 = <?php echo json_encode($data[1]); ?>;
      var labels1 = <?php echo json_encode($data[0]); ?>;

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);
      dataArr = [["NOB","Value"]];
      for(let i = 0; i < chartStrCnt1.length; i++){
        dataArr.push( [labels1[i], chartStrCnt1[i]] );
      }
      function drawChart2(){
        var data = google.visualization.arrayToDataTable(dataArr);

        var view = new google.visualization.DataView(data);

        var options = {
          title: 'Nature of Business availed',
          width: 520,
          height: 230,
          bar: {groupWidth: '95%'},
          legend: {position:'none'}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('myNobChart'));
        chart.draw(view, options);
      }

    </script>
    <?php
  }
?>
