<style media="screen">
  .feedback > div{
    position: absolute;
    height: 100%;
    width: 98%;
    color:white;
    letter-spacing: 3px;
  }
  .blur1{
    background:rgb(221, 237, 188);
    position:relative;
    text-align: center;
    font-size:28px;
    font-weight: bolder;
    padding:7px;
    position: absolute;
  }
</style>

<div class=" row feedback">

  <div class="" id="feedback1" style="background:url('images/clipart/chart-bg.png');background-size:contain">
    <p style="background:rgb(50,60,36);margin:5% 7%;padding:1%;font-size:35px">Title Here</p>
    <p class="blur1" style="padding:38px;margin:-4.6% 7%;width:40%;">FACTORS</p>
    <p class="blur1" style="margin:-4.6% 47.5%;width:45.5%">RATINGS</p>
    <p class="blur1" style="left:47.4%;top:29.4%;width:10%">E</p>
    <p class="blur1" style="left:58%;top:29.6%;width:10%">VS</p>
  </div>


  <div id="feedback2" style="left:100%;opacity:0">
    <p style="font-size:50px;font-weight:bolder;color:white;letter-spacing:5">FEEDBACK</p>
    <p style="color:white;font-size:25px;margin-top:-10px">Comment/Suggestions to improve our services:</p>
    <textarea id="comment-text" name="name" rows="8" cols="80" style="border-radius:10px;padding:30;font-size:25;height:70%" placeholder="Your comments are greatly appreciated."></textarea>
    <button class="btn btn-info" style="font-size:25px;margin-top:15px;margin-left:89%;border-radius:10px;" onclick="submitComment()">
      Submit
    </button>
  </div>

</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Customer Feedback')
    $('.headName img').attr('src','images/clipart/feedback.png')

  })
    $("#avcd").click(function(){
      $('#avcd').animate({
        left:250,
        opacity:0.5
      })
    })


  // function submitComment(){
  //   let comment = $('.comment-text').val();
  //   $.ajax({
  //     url:'spec_func.php?type='
  //   }).done(function({
  //
  //   })
//  }
</script>
