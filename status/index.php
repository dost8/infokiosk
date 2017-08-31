<?php
  require_once '../cls.operations.php';
  $op = new Operations();
 ?>
<div class="row">
  <?php $lguList = $op->selectQuery("SELECT DISTINCT lgu FROM feedbacks", true);
        $dates[0] = $op->selectQuery("SELECT date FROM feedbacks ORDER BY _id ASC LIMIT 1", true);
        $dates[1] = $op->selectQuery("SELECT date FROM feedbacks ORDER BY _id DESC LIMIT 1", true);

        $dates[0] = date('Y-m-d', strtotime($dates[0][0]['date']));
        $dates[1] = date('Y-m-d', strtotime($dates[1][0]['date']));
  ?>
  <div class="col-md-2" style="color:white;">
    <label for="">Municipalities</label>
    <br>
    <select class="lguSelect form-control" name="" style="height:45px;">
      <?php foreach($lguList as $key => $value): ?>
        <option value="<?=$value['lgu']?>"><?=$value['lgu']?></option>
      <?php endforeach ?>
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
        <div class="panel-body div-chart" style="height:85%;">

        </div>
      </div>
    </div>

     <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-gears fa-fw"></i> DOST 8 Services
        </div>
        <div class="panel-body div-services" style="height:55%;padding:0px;">

        </div>
      </div>
    </div>

    <div class="col-md-6" style="height:90%;margin-top:-85px;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-comments"></i>
          Comments
        </div>
        <div class="panel-body div-comments" style="height:320px;padding:0px;">
        </div>
      </div>
    </div>

    <div class="col-md-6" style=>
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-briefcase fa-fw"></i>
          Nature of Business Availed
        </div>
        <div class="panel-body div-nob" style="height:235px;">

        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $.fn.fetchRecord = function(init = false){
      var lgu = $('.lguSelect option:first').val();
      if(!init){
        lgu = $(this).val();
      }

      $('.div-chart, .div-services').html('<img src="images/clipart/load.gif" style="width:200px;">');
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
