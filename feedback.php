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
</style>

<div class=" row feedback">

  <div class="" id="feedback1" style="background:url('images/clipart/chart-bg.png');background-size:contain">
      <table class="">
        <tr>
          <td colspan="6" style="background:rgb(50,60,36);margin:5% 7%;padding:1%;font-size:35px;width:87%">Title Here</td>
        </tr>
        <tr>
          <td class="blur1" rowspan="2">FACTORS</td>
          <td class="blur1" colspan="5">RATINGS</td>
        </tr>
        <tr>
          <?php foreach(['E','VS','S','F','P'] as $row): ?>
            <td class="blur1 rate"><?= $row?></td>
          <?php endforeach ?>
          <?php $questions = [
            'Question 1',
            'Question 2',
            'Question 3',
            'Question 4',
            'Question 5'
          ];
          for ($i=0; $i < count($questions); $i++) {
            echo '<tr>';
            echo '<td class="blur2 questions">'.$questions[$i].'</td>';
            $r = 0;
            foreach (range(1,5) as $value) {
              echo '<td class="blur2 rate row'.$i.'" data-col="'.$r.'" data-row="'.$i.'"></td>';
              $r++;
            }
            echo "</tr>";
          }
          ?>
        </tr>
      </table>
      <button class="btn btn_next" type="button" name="button" onclick="nextFeedback()" style="right: -80px;"><i class="fa fa-chevron-right fa-5x" aria-hidden="true" ></i></button>
  </div>

  <div id="feedback2" style="left:13%;opacity:0;z-index:-2">
    <p style="font-size:50px;font-weight:bolder;color:white;letter-spacing:5">FEEDBACK</p>
    <p style="color:white;font-size:25px;margin-top:-10px">Comment/Suggestions to improve our services:</p>
    <textarea id="commentText" name="name" rows="8" cols="80" style="border-radius:10px;padding:30;font-size:25;height:70%;color:black" placeholder="Your comments are greatly appreciated."></textarea>
    <button class="btn btn-info" style="font-size:25px;margin-top:100px;margin-left:-16%;border-radius:10px;padding:25" onclick="submitFeedback()">
      <span style="">Send Feedback</span>
    </button>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Customer Feedback')
    $('.headName img').attr('src','images/clipart/feedback.png')
  })

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
