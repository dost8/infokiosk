<?php
require_once('cls.operations.php');
$operation = new Operations();
$result = $operation->selectData('organization_head',['_id','name','date','position']);
?>
<style media="screen">
  .org-titles{
    margin-top:1px;
    line-height:1;
  }
</style>
<!-- Adding of nodes -->


<div class="orgList-block" style="min-width:100%;min-height:100%;background:rgb(52,73,94);border-radius:5px;box-shadow: 10px 8px 50px 10px rgba(9, 5, 3, 0.85);text-align:center">
  <img src="images/clipart/org-chart.png" width="85%" alt="" style="position:absolute;left:0%;top:-3.5%;width:1480">
<?php foreach($result as $key => $node):
  $position=explode(',', $node['position']);
?>
  <a href="#" onclick="event.preventDefault()">
    <div class="org-block" style="left:<?=$position[0]?>px;top:<?=$position[1]?>px" data-id="<?=$node['_id']?>">
      <p class='org-titles'><?=$node['name']?></p>
      <!-- generate the list of employees inside the Unit node -->

    </div>
  </a>

<?php endforeach ?>
</div>

<div class="addNodeBtn">
  <button type="button" name="button" class="btn btn-info" style="width:38px;position:absolute;left:1440px;top:20px;" onclick="addOrgNode()"><i class="fa fa-plus"></i></button>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Organization')
    $('.headName img').attr('src','images/clipart/organization.png')

    // Getting the position of the cursor

  })
</script>
