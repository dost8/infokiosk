<?php
ini_set('max_execution_time',0);
  require_once 'cls.operations.php';
  $op = new Operations();

  if($_GET['type'] == 'chart'){
    $result = $op->selectQuery('SELECT chartRate, comment, nob, date, d_services, d_services_text FROM feedbacks WHERE lgu = "'.$_GET['lgu'].'"');
    $resultKey = ['chartRate','comment','nob','date','d_services','d_services_text'];
    $dataArr = [[],[],[],[],[],[]];
    foreach($result as $key => $value){
      for($i = 0; $i < count($dataArr);$i++){
        $index = $resultKey[$i];
        array_push($dataArr[$i], $value[$index]);
      }
    }

    // Count the number of ratings,
    // Count how many 1s, 2s and etc
    $chartStr = implode($dataArr[1]);
    $chartStrCnt = [0,0,0,0,0];
    foreach(range(1,5) as $key => $value){
      $chartStrCnt[$key] = substr_count($chartStr, $value);
    }
    $chartStrCnt = json_encode($chartStrCnt);
    ?>
    <canvas id="myChart" width="500" height="300"></canvas>
    <script type="text/javascript">
      var ctx = document.getElementById("myChart");
      var chartStrCnt = <?php echo $chartStrCnt; ?>;
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ["Excellent", "Very Satisfied", 'Satisfied','Fair','Poor'],
              datasets: [{
                  label: '# of Votes',
                  data: chartStrCnt,
                  backgroundColor: [
                      'rgba(3, 140, 12, 0.81)',
                      'rgba(98, 187, 8, 0.8)',
                      'rgba(250, 255, 0, 0.8)',
                      'rgba(217, 157, 3, 0.8)',
                      'rgba(190, 3, 3, 0.8)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                    ],
                  borderWidth: 1
              }]
          },
          options: {
            responsive: false,
          }
      });
    </script>
<?php
  }
 ?>
