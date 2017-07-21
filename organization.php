<div style="min-width:100%;min-height:100%;background:rgb(52,73,94);border-radius:5px;box-shadow: 10px 8px 50px 10px rgba(9, 5, 3, 0.85);text-align:center">
  <img src="images/clipart/org-chart.png" width="85%" alt="" style="position:absolute;left:0%;top:-3.5%;width:1480">
  <?php
    require_once('orgList.php');
    ];
    foreach ($positions as $value): ?>
      <a href="#" onclick="event.preventDefault()">
        <div class="org-block" style="margin-left:<?= $value[0] ?>%;margin-top:<?= $value[1] ?>%;padding:4px;">
          <p style='margin-top:1px;line-height:1'><?=$value[2]?></p>
          <?php for ($i=0; $i < count($value[3]); $i++) {
            $notClick = ( !isset($value[5]) ? '' : 'true' );
            echo "<span type='hidden'>".$value[3][$i].'//'.$value[4][$i].'//'.$notClick."</span>";
          } ?>
        </div>
      </a>
  <?php endforeach ?>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Organization')
    $('.headName img').attr('src','images/clipart/organization.png')
  })
</script>
