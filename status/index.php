<?php
  require_once '../cls.operations.php';
  $op = new Operations();
 ?>
<div class="row">
  <section>
    <h1>Chart Ratings</h1>
    <?php $lguList = $op->selectQuery('SELECT DISTINCT lgu FROM feedbacks', true); ?>
    <div>
      <label for="">Municipalities</label>
      <select class="lguSelect" name="">
        <?php foreach($lguList as $key => $value): ?>
          <option value="<?=$value['lgu']?>"><?=$value['lgu']?></option>
        <?php endforeach ?>
      </select>
    </div>
    <div class="col-md-4 div-chart">
      <img src="images/clipart/loading.gif" alt="">
    </div>
  </section>
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
      $('.div-chart').html('<img src="../images/clipart/load.gif">');
      $.ajax({
        url : 'spec_func.php',
        data : 'type=view_chart&lgu='+$(this).val()
      }).done(function(r){
        $('.div-chart').html(r);
      });
    });
  });
</script>
