<style media="screen">
  .feedback > div{
    position: absolute;
    height: 100%;
    width: 98%;
    color:white;
    letter-spacing: 3px;
  }
  .blur1{
    background:rgba(221, 237, 189, 0.61);
    text-align: center;
    font-size:28px;
    font-weight: bolder;
    padding:7px;
    position: absolute;
  }
  .blur2{
    background: rgba(196, 224, 139, 0.6);
    font-size:25px;
    padding:7px;
    position: relative;
    text-align: center;
    min-height: 10%; max-height: 10%;
  }
  .btn_next{
    position: absolute;
    height: 250;
    bottom: 228px;
    width: 130;
    right: -80px;
    background: none;
    border: none;
    background: rgba(255, 255, 255, 0.4);
    border-radius: 10px;
  }
</style>

<div class=" row feedback">

  <div class="" id="feedback1" style="background:url('images/clipart/chart-bg.png');background-size:contain">
    <p style="background:rgb(50,60,36);margin:5% 7%;padding:1%;font-size:35px;width:87%">Title Here</p>
    <p class="blur1" style="font-size:41px;;padding:28px;margin:-4.6% 7%;width:40%;">FACTORS</p>
    <p class="blur1" style="line-spacing:25px;margin:-4.6% 47.5%;width:46.6%">RATINGS</p>
    <p class="blur1" style="left:47.4%;top:29.4%;width:9%">E</p>
    <p class="blur1" style="left:56.8%;top:29.5%;width:9%">VS</p>
    <p class="blur1" style="left:66.3%;top:29.5%;width:9%;">S</p>
    <p class="blur1" style="left:75.7%;top:29.5%;width:9%;">F</p>
    <p class="blur1" style="left:85.2%;top:29.5%;width:9%;">P</p>

    <?php
      $questions = ['Question 1','Question 2','Question 3','Question 4','Question 5'];
      $smiley = ['happy','happy (1)','smile','sad','sad (1)'];

      $margin = 38.2;
      $margin_top = 9;
      $margin_left = 47.5;
      for($i = 0;$i < count($questions);$i++){
        echo '<p class="blur2" style="top:'.$margin.'%;left:7%;width:40%;position:absolute">'. $questions[$i] .'</p>';
        $r = 1;
        foreach($smiley as $face){
          echo '<div class="blur2 rate row'.$i.'" style="width:9%;left:'.$margin_left.'%;margin-top:'.$margin_top.'%" data-smiley="'.$smiley[$i].'" data-row="'.$i.'" data-rate="'.$r.'"></div>';
          $margin_top = 0.6;
          $r++;
        }
        $margin += 11.2;
        $margin_left += 9.4;
        $margin_top -= 28.32;
      }
      ?>
      <button class="btn btn_next" type="button" name="button" onclick="nextFeedback()" style="z-index:2"> <i class="fa fa-chevron-right fa-5x" aria-hidden="true" ></i></button>
  </div>

  <div id="feedback2" style="left:0%;opacity:0">
    <p style="font-size:50px;font-weight:bolder;color:white;letter-spacing:5">FEEDBACK</p>
    <p style="color:white;font-size:25px;margin-top:-10px">Comment/Suggestions to improve our services:</p>
    <textarea id="comment-text" name="name" rows="8" cols="80" style="border-radius:10px;padding:30;font-size:25;height:70%" placeholder="Your comments are greatly appreciated."></textarea>
    <button class="btn btn_next" style="font-size:25px;margin-top:15px;margin-left:89%;border-radius:10px;" onclick="submitComment()">
      Submit
    </button>
  </div>

</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Customer Feedback')
    $('.headName img').attr('src','images/clipart/feedback.png')

  })

  $(document).on('click','.rate', function(){
    let row = '.row'+$(this).data('row')
    $(row).html('')
    $(this).append('<img src="images/clipart/'+ $(this).data('smiley') +'.png" style="width:50px;">')
  })

  function nextFeedback(){
    $('#feedback1').animate({
      right:1000,
      opacity:0
    });

    $('#feedback2').animate({
      right:800,
      opacity:1
    })
  }


  // function submitComment(){
  //   let comment = $('.comment-text').val();
  //   $.ajax({
  //     url:'spec_func.php?type='
  //   }).done(function({
  //
  //   })
//  }
</script>
