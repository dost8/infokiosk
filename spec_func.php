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
    <canvas id="myChart" width="556" height="300" style="width:556px;height:355px;"></canvas>
    <script type="text/javascript">
      var ctx = document.getElementById("myChart");
      var chartStrCnt = <?php echo $chartStrCnt; ?>;
      var label = 'Chart Ratings from '+<?php echo(json_encode($_REQUEST['lgu'])); ?>;
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ["Excellent", "Very Satisfied", 'Satisfied','Fair','Poor'],
              datasets: [{
                  label: label,
                  data: chartStrCnt,
                  backgroundColor: [
                      'rgba(3, 140, 12, 0.81)',
                      'rgba(98, 187, 8, 0.8)',
                      'rgba(250, 255, 0, 0.8)',
                      'rgba(217, 157, 3, 0.8)',
                      'rgba(190, 3, 3, 0.8)'
                  ],
                  borderColor: [
                      'rgba(3, 140, 12,1)',
                      'rgba(98, 187, 85, 1)',
                      'rgba(250, 255, 0, 1)',
                      'rgba(217, 157, 3, 1)',
                      'rgba(190, 3, 3, 0.8)'
                    ],
                  borderWidth: 1
              }]
          },
          options: {
            responsive: false,
          }
      });
    </script>
    <!--BREAK-->
    <?php
      $navBarMain = array_unique($dataArr[4]); //Index 4 is the index for the Services
    ?>
    <div class="sidebar-wrapper" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav">
          <?php
            $navBarMain = array_unique($dataArr[4]); //Index 4 is the index for the Services
            foreach($navBarMain as $key1 => $value1){
              echo '<li><a href="#" onclick="event.preventDefault()">'.strtoupper($value1).'</a><span class="fa-arrow"></span>';
              echo '<ul class="nav nav-second-level collapse">';
                // foreach($dataArr[4] as $key2 => $value2){
                //   if($value1 == $value2){
                //     echo '<li>'.$dataArr[5][$key2].'</li>';
                //     unset($dataArr[4][$key2]);
                //     unset($dataArr[5][$key3]);
                //   }
                // }
              echo '</ul>';
              echo '</li>';
            }
          ?>
        </ul>
      </div>
    </div>
    <!--BREAK-->
    <div style="overflow-y:auto">
      <h3>List of Comments</h3>
      <?php
        foreach($dataArr[1] as $key => $value){
          if(strlen($value) > 25)
            $value = substr($value, 0, 20).'...';
          echo "<button class='btn form-control' style='color:black;text-align:left'><img class='' src='images/clipart/blank-dp.png' style='width:20px;'>".$value."</button>";
        }
       ?>
    </div>
    <?php
  }
?>
