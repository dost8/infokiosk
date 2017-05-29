<div class="container">
  <section id="">
    <p style="font-size:50px;font-weight:bolder;color:white;letter-spacing:5">FEEDBACK</p>
    <p style="color:white;font-size:25px;margin-top:-10px">Comment/Suggestions to improve our services:</p>
    <textarea id="comment-text" name="name" rows="8" cols="80" style="border-radius:10px;padding:30;font-size:25;height:70%" placeholder="Your comments are greatly appreciated."></textarea>
    <button class="btn btn-info" style="font-size:25px;margin-top:15px;margin-left:89%;border-radius:10px;" onclick="submitComment()">
      Submit
    </button>
  </section>


  <section id="happy-chart">

  </section>

</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Customer Feedback')
    $('.headName img').attr('src','images/clipart/feedback.png')
  })

  function submitComment(){
    let comment = $('.comment-text').val();
    $.ajax({
      url:'spec_func.php?type='
    }).done(function({

    })
  }
</script>
