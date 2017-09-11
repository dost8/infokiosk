<style media="screen">
  .laboratory .btn{
    display: inline-block;
    margin:5px 5px 5px 5px;
    background: white;
    border:2px solid #ccc;
    border-radius: 5px;
    font-size: 25px;
    color:black;
  }
  .laboratory .btn-selected{
    background: rgb(64, 133, 236);
    color:white;
  }
  .laboratory .service-desc{
    background: white;
    margin-top:50px;
    height:560px;
    overflow-y: auto;
    border-radius: 10px;
    padding: 10px 45px;
  }
  .laboratory .service-desc h1, .laboratory .service-desc h3{
    text-indent: -25px;
  }
</style>
<div class="frame laboratory">
  <div class="wrapper" style="text-align:justify">
    <?php
      $selected = 'btn-selected';
      // List of available services offered by DOST-8 laboratory
      $list = ['Total Suspended Solids','Heterotrophic Place Count (HPC)',
      'Total Coliform Count','pH','Sulfate','Total Hardness','Chloride','Calcium',
      'Total Fat','Alkalinity','Carbonate and bicarbonate','Aluminum','Chlorine (Residual)',
      'Moisture'];
      foreach ($list as $key => $value) {
        echo '<div class="btn service'.$key.' '.$selected.'" onclick="labService('.$key.')">'.$value.'</div>';
        $selected = '';
      }
    ?>
  </div>
  <div class="service-desc">
    <?php
     ?>
  </div>
</div>
<script src="laboratory/serviceList.js" charset="utf-8"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Laboratory');
    $('.headName img').attr('src','images/clipart/laboratory.png');
    labService(0);
  });

  function labService(i){
    $('.laboratory .btn').removeClass('btn-selected');
    $('.laboratory .service'+i).addClass('btn-selected');

    var append = '<h1><b>'+dataArr[i][0]+'</b></h1>';
    append += '<h3><b>Method Name: </b>'+dataArr[i][1]+'</h3>';
    append += '<h3><b>References: </b>'+dataArr[i][2]+'</h3>';
    append += '<h3><b>Test Fee: </b>'+dataArr[i][3]+'</h3>';
    if(dataArr[i][4] != null){
      append += '<h3><b>Description: </b>'+dataArr[i][4]+'</h3>';
    }
    $('.service-desc').html(append);
  }
</script>
