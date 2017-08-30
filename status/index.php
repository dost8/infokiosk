<?php
  require_once '../cls.operations.php';
  $op = new Operations();
 ?>
<div class="row">
  <?php $lguList = $op->selectQuery("SELECT DISTINCT lgu FROM feedbacks", true); ?>
  <div class="col-md-2">
    <label for="">Municipalities</label>
    <br>
    <select class="lguSelect form-control" name="">
      <?php foreach($lguList as $key => $value): ?>
        <option value="<?=$value['lgu']?>"><?=$value['lgu']?></option>
      <?php endforeach ?>
    </select>
  </div>

    <div class="col-lg-10" style="overflow-y:auto;">
    <div class="col-md-6" style="height:50%;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-bar-chart-o fa-fw"></i>
          Area Chart
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
        <div class="panel-body div-services" style="height:55%;">
          
        </div>
      </div>
    </div> 

    <!-- <div class="col-md-5" style="height:90%;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-comments"></i>
          Comments
        </div>
        <div class="panel-body">

        </div>
      </div>
    </div> -->

    <!-- <div class="col-md-5" style="height:40.1%;width:40.9%;position:absolute;margin:24.4% 16.4%;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-briefcase fa-fw"></i>
          Nature of Business
        </div>
        <div class="panel-body div-nob" style="height:265px;">

        </div>
      </div>
    </div>-->
  </div> 
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
      url : 'spec_func.php',
      data : 'type=view_chart&lgu='+$('.lguSelect option:first').val()
    }).done(function(r){
      $('.div-chart').html(r);
    });

    $('.lguSelect').on('change',function(){
      $('.div-chart, .div-services').html('<img src="images/clipart/load.gif" style="width:200px;">');
      $.ajax({
        url : 'spec_func.php',
        data : 'type=viewChart&lgu='+$(this).val()
      }).done(function(res){
        var res = res.split('<!--BREAK-->');
        $('.div-chart').html(res[0]);
        $('.div-services').html(res[1]);
      });
    });
  });
</script>
