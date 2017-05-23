
<style media="screen">
  .portals .block{
    color: white;
    background: rgba(0, 0, 0, 0.5);
    border:1px inset black;
    border-radius: 5px;
    text-align: center;
    height: 210px;
    width: 228px;
  }
  .portals .block img{
    height: 100px;
    margin-top: 25px;
  }
</style>

<div class="container portals">
  <div class="row">
    <div class="col-md-5">
      <?php $title = [['One Expert','One Store','One Lab','Tech4ed','STARBOOKS'],[61,60,59,60,60]];
        foreach(range(0,4) as $i):
       ?>
       <div class="block col-sm-4" onclick="showLink('"<?= $title[0][1] ?>"')">
          <img src="images/clipart/<?= $title[0][$i]?>.png" style="height:<?= $title[1][$i] ?>%">
         <p><?= $title[0][$i] ?></p>
       </div>
     <?php endforeach ?>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-6" id="link-desc" style="background:white;height:90%;">

    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Portals')
    $('.headName img').attr('src','images/clipart/portals.png')
  })
</script>
