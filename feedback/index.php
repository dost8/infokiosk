<style media="screen">

  #myCarousel .carousel-control{
    top:330px;
    background: none;
    width: 57px;
    display : none;
  }
  #myCarousel .carousel-control .fa{
    font-size:100px;
  }
</style>

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="font-family:'ubuntu' san-serif">
  <!-- Indicators -->
  <ol class="carousel-indicators" style="display:none">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <?php include_once 'chart1.php'; ?>
    </div>

    <div class="item ">
      <?php include_once 'chart2.php'; ?>
    </div>

    <div class="item ">
      <?php include_once 'chart3.php'; ?>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev" onclick="event.preventDefault()">
    <span><i class="fa fa-chevron-left"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next" onclick="event.preventDefault()">
    <span><i class="fa fa-chevron-right"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Customer Feedback')
    $('.headName img').attr('src','images/clipart/feedback.png')

    $('#myCarousel').carousel({
      pause : true,
    interval : false
    });
  });

var rightPos = [1600, 800]
var leftPos = [0,800]
var data = {
  'nob' : '',
  'd_services' : '',
  'd_services_text' : '',
  'chartRate' : '00000',
  'comment' : '',
  'type' : 'submitFeedback'
};

 function previewFeedback(){
  data.comment = $('.commentTxt').val();
  let modal = "#feedback_preview-modal ";

  // setting values for the Preview modal
  $(modal + 'table .nob').val(data.comment);
  $(modal + 'table .services').val(data.d_services);
  $(modal + 'table .services_text').val(data.d_services_text);  console.log(data.chartRate)
  $.each(data.chartRate, function(index, value){
    $(modal + 'table .chart'+index).append('<img src="images/clipart/'+smiley[value]+'.png">');
  })
  $(modal + 'table .comment').val(data.comment);

  $(modal).modal('toggle')
 }

 $('#feedback_preview-modal .btn-proceed').click(function(){
   $('#feedback_preview-modal').modal('hide');
   $('#alerts .modal-body').html('').attr('<img src="images/clipart/load.gif" style="width:50px;height:50px;">');
   $('#alerts').modal('toggle');
     $.ajax({
       url:'spec_func.php',
       data:data,
       dataType:'JSON'
     }).done(function(r){
       $('#alerts .modal-body').append('<h3>Thank you for your feedback. <br>This will help in future DOST-8 endeavours. </h3>')
     })
  })
</script>
