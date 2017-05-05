<div style="min-width:100%;min-height:100%;background:rgb(52,73,94);border-radius:5px;box-shadow: 10px 8px 50px 10px rgba(9, 5, 3, 0.85);text-align:center">
  <img src="images/clipart/org-chart.png" width="85%" alt="" style="position:absolute;left:8%;top:-1%;">
  <?php
    $positions = [
      #[x,y,title,name,initials]
      [49.6, 1.4, 'Regional Director','EDGARDO M. ESPERANCILLA, CESO II','eme'],
      [41.4, 4],
      [57.7,4],
      // FAS
      [27.2,6.7],
      [19.85,8.8],
      [34.6,8.85],
      [16.75,12.2],
      [38.15,12.2],
      [9.1,17.7],
      [16.75,17.7],
      [24.4,17.7],
      [33,17.7],
      [43.6,17.7],
      [9.1,21.2],
      [16.75,21.2],
      [24.4,21.2],
      [33,21.2],
      [43.6,21.2],
      [43.6,26],
      [43.6,29.6],
      [43.6,33.1],
      []


    ];
    foreach ($positions as $value): ?>
      <a href="#">
        <div class="org-block" style="margin-left:<?= $value[0] ?>%;margin-top:<?= $value[1] ?>%">
          <p></p>
        </div>
      </a>
  <?php endforeach ?>
</div>
