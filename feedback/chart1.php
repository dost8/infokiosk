<style media="screen">
  .left-col .td{
    padding: 16px;
    padding-right:55px;
    font-weight: 300;
  }
  .left-col label.btn i{
    opacity: 0;
  }
  .left-col label.btn.active i{
    opacity : 1;
  }

  /*Right column*/
  .right-col .image_link{
    width : 280px;
    height : 85px;
    margin : 6px 80px;
    text-align : center;
    background : white;
  }
  .right-col .image_link > img, #dost-services_modal .modal-header >  span{
    height : 100%;  width : 100%;
  }
  .right-col .image_link.active{
    background : rgb(255, 187, 50);
  }

</style>
<div class="" style="height:100%;background-image:url('images/clipart/Box.png');background-size:cover">
  <table style="position:absolute;left:100px;top:80px">
    <tr>
      <!-- First Column; The selection of business nature -->
      <td class="left-col" style="font-weight:bolder;border-right:3px solid white">
        <table style="font-size:25px; color:white;font-family:monospace">
          <tr>
            <td colspan="4" style="font-weight:bolder;font-size:30px">Nature of Business (Choose One).</td>
          </tr>
          <tr>
            <?php
            $list = ['food','Plastic/Rubber','Agriculture','Handicraft/Holiday Decors','Construction','Metals & Engineering','Furniture','Government','Beverage','Chemicals/Patrochemicals','Trading','Pharmaceuticals','Mining','Academe','Transport','Others'];
            echo "<tr>";
            for($i = 1;$i <= count($list); $i++){
              echo '<td class="td radio-btn">
                <label class="btn btn-default feedback_radio">
                  <input type="radio" name="businessType" style="display:none">
                  <span><i class="fa fa-check fa-2x"></i></span>
                </label>
              ';
              echo '<td class="td text">'.$list[$i - 1].'</td>';

              if(($i % 2) == 0)
                echo '</tr><tr>';
            }
            echo '</tr>';
             ?>
          </tr>
        </table>
      </td>
      <td class="right-col">
        <h3>Service Availed form DOST <br>(Pleases check and include details):</h3>
        <?php
          // List of images
          $list = ['setup','packaging','training','undergrad','datbed','finance'];
          for($i = 0; $i < count($list);$i++){
            echo '
              <div class="image_link" data-image="'.$list[$i].'">
                <img src="images/dost-services/'.$list[$i].'.png">
              </div>
            ';
          }
         ?>
      </td>
    </tr>
  </table>
</div>

<script type="text/javascript">
  $('.left-col label.btn').click(function(){
    $('.left-col label.btn').removeClass('active');
    $(this).addClass('active');
  });

  $('.image_link').click(function(){
    $('.image_link').removeClass('active')
    $(this).addClass('active');

     $('#dost-services_modal .modal-header > span > img').attr('src','images/dost-services/'+$(this).data('image')+'.png');
    $('#dost-services_modal').modal('toggle');
  });

  $('#dost-services_modal .modal-footer .btn').click(function(){
    $('#dost-services_modal').modal('toggle');
    $('.right.carousel-control').css('display','block')
  })

  $('.right.carousel-control').click(function(){
    $('.left.carousel-control').css('display','block');
  })
</script>
