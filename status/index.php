<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php
  require_once '../cls.operations.php';
  $op = new Operations();
 ?>
<div class="row">
  <?php
        $lguList = scandir('../backups/');
        for($i = 2; $i < count($lguList);$i++){
          $result = $op->selectData('feedbacks',['date'],"lgu = '".$lguList[$i]."'", true);
          if(is_dir('../backups/'.$lguList[$i])){
            $dateList = scandir('../backups/'.$lguList[$i]);
            for($ii = 2;$ii < count($dateList); $ii++){
              $dateList[$ii] = str_replace('.txt','',$dateList[$ii]);

              if(strtotime($dateList[$ii]) > strtotime($result['date'])){
                    $op->textToSQL('../backups/'.$lguList[$i].'/'.$dateList[$ii].'.txt');
              }
            }
          }
        }
        // $lguList = $op->selectQuery("SELECT DISTINCT lgu FROM feedbacks");
        $dates[0] = $op->selectQuery("SELECT date FROM feedbacks ORDER BY _id ASC LIMIT 1");
        $dates[1] = $op->selectQuery("SELECT date FROM feedbacks ORDER BY _id DESC LIMIT 1");

        $dates[0] = date('Y-m-d', strtotime($dates[0][0]['date']));
        $dates[1] = date('Y-m-d', strtotime($dates[1][0]['date']));
  ?>
  <div class="col-md-2" style="color:white;">
    <label for="">Municipalities</label>
    <br>
    <select class="lguSelect form-control" name="" style="height:45px;">
      <?php for($i = 2; $i < count($lguList);$i++){
        echo '<option value="'.$lguList[$i].'">'.$lguList[$i].'</option>';
       } ?>
    </select>

    <label for="">Date From</label>
    <br>
    <input type="date" name="" value="<?=$dates[0]?>" class="form-control date-from">
    <br>
    <label for="">Date To</label>
    <br>
    <input type="date" name="" value="<?=$dates[1]?>" class="form-control date-to">
  </div>

    <div class="col-lg-10" style="overflow-y:auto;">
    <div class="col-md-6" style="height:50%;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-bar-chart-o fa-fw"></i>
          Customer Satisfaction Chart
        </div>
        <div class="panel-body div-chart" style="height:85%;padding:0px;">
          <img src="images/clipart/load.gif" style="width:251px;margin:60px 150px">
        </div>
      </div>
    </div>

     <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-gears fa-fw"></i> DOST 8 Services Feedbacks
        </div>
        <div class="panel-body div-services" style="height:55%;padding:0px;overflow-y:auto;">
          <img src="images/clipart/load.gif" style="width:265px;margin:90px 150px">
        </div>
      </div>
    </div>

    <div class="col-md-6" style="height:90%;margin-top:-85px;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-comments"></i>
          Comments
        </div>
        <div class="panel-body div-comments" style="height:320px;padding:0px;overflow-y:auto;">
          <img src="images/clipart/load.gif" style="width:240px;margin:70 168">
        </div>
      </div>
    </div>

    <div class="col-md-6" style=>
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-briefcase fa-fw"></i>
          Nature of Business Availed
        </div>
        <div class="panel-body div-nob" style="height:235px;padding:0px;">
          <img src="images/clipart/load.gif" style="width:200px;margin:50 190">
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Status')
    $('.headName img').attr('src','images/clipart/status.png')

    $.fn.fetchRecord = function(init = false){
      var lgu = $('.lguSelect option:first').val();
      if(!init){
        lgu = $('.lguSelect').val();
      }

      $('.div-chart').html('<img src="images/clipart/load.gif" style="width:251px;margin:60px 150px">');
      $('.div-services').html('<img src="images/clipart/load.gif" style="width:265px;margin:90px 150px">');
      $('.div-comments').html('<img src="images/clipart/load.gif" style="width:240px;margin:70 168">');
      $('.div-nob').html('<img src="images/clipart/load.gif" style="width:200px;margin:50 190">');

      $.ajax({
        url : 'spec_func.php',
        data : 'type=viewChart&lgu='+lgu+'&fromDate='+$('.date-from').val()+'&toDate'+$('.date-to').val()
      }).done(function(res){
        var res = res.split('<!--BREAK-->');
        $('.div-chart').html(res[0]);
        $('.div-services').html(res[1]);
        $('.div-comments').html(res[2]);
        $('.div-nob').html(res[3]);
      });
    }

    $.fn.fetchRecord(true);

    $('.lguSelect').on('change',function(){
      $.fn.fetchRecord();
    });


  });
</script>
