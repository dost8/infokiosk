<div style="min-width:100%;min-height:100%;background:rgb(52,73,94);border-radius:5px;box-shadow: 10px 8px 50px 10px rgba(9, 5, 3, 0.85);text-align:center">
  <img src="images/clipart/org-chart.png" width="85%" alt="" style="position:absolute;left:8%;top:-1%;">
  <?php
    $positions = [
      #[x,y,title,job title[],name[],initials[]]
      [49.6, 1.4, 'Regional Director',['Regional Director'],['EDGARDO M. ESPERANCILLA, CESO II'],['eme']],
    //  [41.4, 4,''],
    //  [57.7,4],
      // FAS
      // [27.2,6.7],
      // [19.85,8.8],
      // [34.6,8.85],
      // [16.75,12.2],
      // [38.15,12.2],
      // [9.1,17.7],
      // [16.75,17.7],
      // [24.4,17.7],
      // [33,17.7],
      // [43.6,17.7],
      // [9.1,21.2],
      // [16.75,21.2],
      // [24.4,21.2],
      // [33,21.2],
      // [43.6,21.2],
      // [43.6,26],
      // [43.6,29.6],
      // [43.6,33.1],
      // [43.6,36.7],
      // // TO
      // [72.5,6.7],
      // [56, 8.8],
      // [84,8.8],
      // [65.8,11.3],
      // [56, 13],
      // [56, 17.4],
      // [56, 21.7],
      // [56, 26],
      // [56, 30.3],
      // [65.9,15.3],
      // [65.9, 19.5],
      // [65.9, 23.5],
      // [66, 27.9],
      // [66, 32.4],
      // [80, 15.4],
      // [75.4, 19.5],
      // [84.3, 19.5],
      // [75.4, 23.5],
      // [84.3, 23.5],
      // [75.4, 27.8],
      // [84.3, 27.8],
      // [75.4, 32.5],
      // [84.3, 32.5],
      // [84.3, 36.4]

    ];
    foreach ($positions as $value): ?>
      <a href="#" onclick="event.preventDefault()">
        <div class="org-block" style="margin-left:<?= $value[0] ?>%;margin-top:<?= $value[1] ?>%">
          <p style='margin-top:16px'><?=$value[2]?></p>
          <?php for ($i=0; $i < count($value[3]); $i++) {
            echo "<span type='hidden'>".$value[3][$i].'//'.$value[4][$i].'//'.$value[5][$i]."</span>";
          } ?>
        </div>
      </a>
  <?php endforeach ?>
</div>
