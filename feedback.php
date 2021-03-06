<style media="screen">
  .feedback > div{
    position: absolute;
    height: 103%;
    width: 100%;
    color:white;
    letter-spacing: 3px;
  }
  .feedback table{
    border-collapse: separate;
    border-spacing: 5px;
    position:absolute;
    left:60px;
    top:54px;
    width:91%;
    color:white;
  }
  .feedback table td{
    border:none;
    width: 30px;
    height:75px;
  }
  .feedback .questions{
    width:40%;
    font-size: large;
  }
  .feedback .rate{
    min-height: 75px;     max-height: 75px;
    min-width: 140px;     max-width: 140px;
    font-weight: 800;
    font-size: 33px;
  }
  .blur1{
    background:rgba(221, 237, 189, 0.61);
    text-align: center;
    font-size:28px;
    font-weight: bolder;
    padding:7px;
  }
  .blur2{
    background: rgba(196, 224, 139, 0.6);
    font-size:25px;
    padding:7px;
    text-align: center;
    min-height: 10%; max-height: 10%;
  }
  .btn_next, .btn_prev{
    position: absolute;
    height: 250;
    bottom: 228px;
    width: 130;
    z-index:2;
    border: none;
    background: rgba(255, 255, 255, 0.4);
    border-radius: 10px;
  }

  #myCarousel .left-td.text{
    padding: 18px;
    padding-right: 40px;
    font-weight: bolder;
  }
  #myCarousel .left-td.rdo{
    padding: 0px 34px;
  }
  #mycarousel a.carousel-control{
    display:none
  }

  .right_div div.image_link{
    width: 280px;
    height : 85px;
    margin: 6px 80px;
    text-align: center;
    background : white;
  }
  .right_div .image_link img{
    width: 100%;
    height: 100%;
  }

  /*Radio Button*/
  .feedback_radio{
    height: 22px;   width: 22px;
  }
  .feedback_radio input[type="radio"]{
    display:none;
  }
  .feedback_radio span.glyphicon{
    opacity:0;
    font-size: 35px;
    margin: -14px -15px;
  }
  .feedback_radio.active span.glyphicon{
    opacity: 1;
  }

</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <!-- First page / Nature of Business -->
      <div class="item active" style="height:100%;background-image:url('images/Clipart/Box.png');background-size:cover;padding:65px;color:white">
        <table>
          <tr>
            <td style="border-right:2px solid white">
              <table style="font-size:25px;color:white;font-family:monospace;">
                <tr>
                  <td colspan="4" style="font-family:monospace;font-weight:bolder;">Nature of Businesss (Choose One)</td>
                </tr>
                <?php $list = ['Food','Plastic/Rubber','Agriculture','Handicraft/Holiday Decors','Construction','Metals & Engineering','Furniture','Government','Beverage','Chemicals/Patrochemicals','Trading','Pharmaceuticals','Mining','Academe','Transport','Others'];

                  echo "<tr>";
                  for($i = 1; $i <= count($list); $i++){
                      echo '<td class="left-td rdo">
                        <label class="btn btn-default feedback_radio">
                          <input type="radio" name="businessType" class=" radio-warning radio'.$i.'">
                          <span class="glyphicon glyphicon-ok"></span>
                        </label>
                      </td>';
                      echo '<td class="left-td text">'.$list[$i - 1].'</td>';

                    if(($i % 2) == 0){
                      echo "</tr><tr>";
                    }
                  }
                  echo '</tr>';
                 ?>
                 <tr><td></td></tr>
              </table>
              </td>

              <td style="padding-left:45px;">
                <div class="right_div" style="margin-top:-30px;">
                  <h3 style="color:white;font-family:monospace;font-weight:bolder">Service availed from DOST <br>(Please check and include details):</h3>
                  <?php
                  $list = ['setup','packaging','training','undergrad','datbed','finance'];
                  foreach ($list as $key => $value):
                 ?>
                  <div class="image_link" data-image="<?=$value?>">
                    <img src="images/clipart/<?=$value?>.png" alt="">
                  </div>
                  <?php endforeach ?>
                </div>
              </td>
          </tr>
        </table>
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" onclick="event.preventDefault()" style="width:4%;background:none;">
      <span><i class="fa fa-chevron-left fa-4x" style="margin:329px 0px"></i></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#myCarousel" data-slide="next" onclick="event.preventDefault()" style="width:4%;background:none;">
      <span><i class="fa fa-chevron-right fa-4x" style="margin:329px 0px"></i></span>
      <span class="sr-only">Next</span>
    </a>

    <ol class="carousel-indicators" style="display:none">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Customer Feedback')
    $('.headName img').attr('src','images/clipart/feedback.png')

    $('#myCarousel').carousel({
      pause : true,
      interval : false
    })
  })

// Business type selection;
$('.feedback_radio').click(function(){
  $('.feedback_radio').removeClass('active');
  $(this).addClass('active');
});

// Service availed selection
$('.image_link').click(function(){
  $('.image_link').css('background','white');
  $(this).css('background','rgb(255, 187, 50)')

   $('#feedback_modal').modal('toggle');
   $('#feedback_modal .modal-header span').html('');
   $('#feedback_modal .modal-header span').append('<img class="pull-left" src="images/clipart/'+$(this).data('image')+'.png" style="width:345px;height:90px;">');
});

// Continue button from prompt_modal
$('#feedback_modal .modal-footer > button').click(function(){
  $('#feedback_modal').modal('toggle')
  $('a.right').css('display','block');
})

// Satisfaction Chart
let chartRate = [0,0,0,0,0]
let smiley =  ['happy','happy (1)','smile','sad','sad (1)'];
$(document).on('click','.rate', function(){
  let rowNo = $(this).data('row')
  let row = '.row'+rowNo
  let colNo = $(this).data('col')
  $(row).html('')
  $(this).append('<img src="images/clipart/'+ smiley[ colNo ] +'.png" style="width:50px;">')
  chartRate[ colNo ] = rowNo;
})

var rightPos = [1600, 800]
var leftPos = [0,800]
  function nextFeedback(){
    $('#feedback1').animate({
      right:rightPos[0],
      opacity:0
    });

    $('#feedback2').animate({
      right:rightPos[1],
      opacity:1
    })
    rightPos[0] += 16
    rightPos[1] += 800
  }

function submitFeedback(){
    var comment = $('#commentText').val();
    $.ajax({
      type:'GET',
      url:'spec_func.php',
      data:{'chart':chartRate.join(''),'comment':comment,'type':'submitFeedback'}
    }).done(function(r){
      $('#alerts .modal-body').html('')
    })
 }
</script>
