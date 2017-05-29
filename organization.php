<div style="min-width:100%;min-height:100%;background:rgb(52,73,94);border-radius:5px;box-shadow: 10px 8px 50px 10px rgba(9, 5, 3, 0.85);text-align:center">
  <img src="images/clipart/org-chart.png" width="85%" alt="" style="position:absolute;left:8%;top:-1%;">
  <?php
    $positions = [
      #[x,y,title,job title[],name[],initials[],clickable]
      [49.6, 1, '<br>Regional Director',['Regional Director'],['EDGARDO M. ESPERANCILLA, CESO II']],
      [41.4, 4,'<br> Secretary',['SRS II'],['JEAN GAY O. RAGUB']],
      [57.7,4.5,'COA Audit &nbsp;Team',[''],['']],
      // FAS
       [27.2,6.7,'Finance & Administrative Services',['Assistant Regional Director/HRMO'],['RUFINO E. MENGOTE, CESE']],
      // [19.85,8.8],
      // [34.6,8.85],
       [16.75,12.2, 'Finance & Management Section',[''],[''],false],
       [38.15,12.2, 'Administrative &nbsp;Services &nbsp;Section',[''],[''],false],

       [9.1,17.2, '<br> Accounting &nbsp; Unit',['Accountant III'],['LOURDES C. SALVATIERRA']],
       [9.1,20.7, '<br>Accounting &nbsp; Staff', [''],['']],

       [16.75,17.7, 'Budget Management Unit',['AO V - Budget Officer','Clerk I'],['DEBBIE G. DELMO','CLARICE D. CAÑEGA']],
       [24.4,17.7, 'Cash Management Unit',['AO V - Cashier','Administrative Aide VI'],['REMEDIOS P. DELORIA','RYAN P. JUAN']],

       [33,17.2, '<br>Supply & Property Unit',['AO V - Supply & Property Officer'],['PROSPERO T. PEQUE']],
       [33,21.6, 'Procurement Services',['Science Research Assistant','Clerk I'],['DANILO C. REYES','JEYTO G. PELIÑO']],
       [43.6,17.7, '<br> HRM Office',['HRM Assistant'],['CLEENDY U. LAGUNZAD']],


      // [16.75,21.2],
      // [24.4,21.2],

       [43.6,21.7, ' General Services',[''],[''],false],
       [43.6,26.5,'Transport Services',['Adimin Aide IV','Admin Aide I','Admin Aide I'],['DOMINIC O. ABIABI','PEDRO G. RAAGAS','ROGELO P. BAJON']],
       [43.6,29.6, '<br>Bank Liaison',['Admin Aide I'],['JOSEPH I. CABELIN']],
       [43.6,33.1, '<br>Utility Services',['Utility'],['GERRY S. GASPAY']],
       [43.6,36.7, '<br>Infra Projects',['PA II'],['Ms. Sheina ']],
      // // TO
       [72.5,6.1,'<br> Technical Operations',['Assistant Regional Director'],['ERNESTO M. GRANADA, CSEE']],
      // [84,8.8],
      // [65.8,11.3],
       [56, 8.8,'<br> Biliran PSTC', ['Provincial S&T Director','SRS II','Admin Asst. III','PA II','PA I','Utility'],['ROMEO L. DIGNOS','MA. CATHERINE G. MANIBA','JULIET M. AGUIRRE','GRACE VILLALYN R. SALDO','TEDDY M. ABENIDO','RUDY L. PADA, JR.']],
       [56, 12.6,'<br>Eastern Samar PSTC',['Provincial S&T Director'],['ARNALDO T. AMOSCO, JR.']],
       [56, 17.4,'<br>Leyte PSTC',['Provincial S&T Director'],['JOHN GLENN G. OCAÑA']],
       [56, 21.2,'<br>Northern Samar PSTC',['Provincial S&T Director'],['VERONICA A. LAGUITAN']],
       [56, 26, '<br>Samar PSTC',['Provincial S&T Director'],['ROSELLA L. GOPO']],
       [56, 29.9, '<br>Southern Leyte PSTC',['Provincial S&T Director'],['FLORITA M. SANTIAGO']],
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
