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
    width:40%
  }
  .feedback .rate{
    min-height: 75px;     max-height: 75px;
    min-width: 140px;     max-width: 140px;
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
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

    <div class="item">
      <img src="chicago.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="ny.jpg" alt="New York">
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

let charRate = [0,0,0,0,0]
let smiley =  ['happy','happy (1)','smile','sad','sad (1)'];
$(document).on('click','.rate', function(){
  let rowNo = $(this).data('row')
  let row = '.row'+rowNo
  let colNo = $(this).data('col')
  $(row).html('')
  $(this).append('<img src="images/clipart/'+ smiley[ colNo ] +'.png" style="width:50px;">')
  charRate[ colNo ] = rowNo;
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
      data:{'chart':charRate.join(''),'comment':comment,'type':'submitFeedback'}
    }).done(function(r){
      $('#alerts .modal-body').html('')
    })
 }
</script>
