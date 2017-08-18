<style media="screen">

  .title{
    background-color: rgb(50,60,36);
    margin:5% 7%;
    padding:1%;
    font-size: 35px;
    width:87%;
  }

  .chart2 table{
    border-collapse: separate;
    border-spacing: 5px;
    position: absolute;
    width: 91%;
    height:86%;
    font-family: sans-serif;
    font-weight: 600;
  }

  td.blur1{
    background: rgba(221, 237, 189, 0.61);
    text-align: center;
    font-size: 35px;
    font-weight: bolder;
    padding: 7px;
    left:60px;
    top:54px;
    color:white;
    max-width: 20px;
  }
  td.blur2{
    background: rgba(196, 224, 139, 0.6);
    font-size: 25px;
    padding: 7px;
    text-align: center;
    min-height: 75px;  max-height: 75px;
    height: 75px;
    width: 7%;
    color:white;
  }
  td.questions{
    width : 45%;
  }
</style>
<div class="chart2" style="height:100%;background-image:url('images/clipart/Box.png');background-size:cover">
  <table class="" style="left:4.6%;top:9%">
    <tr>
      <td class="title td" colspan="6" style="color:white;">Delivery of Service(s) (Please rate)</td>
    </tr>
    <tr>
      <td class="blur1 td" rowspan="2">FACTORS</td>
      <td class="blur1 td" colspan="5" style="38px;">RATINGS</td>
    </tr>
    <tr>
      <?php foreach(['E','VS','S','F','P'] as $value){
        echo '<td class="blur1">'.$value.'</td>';
      }
       $questions = [
        'Timelessnes (service completed within the agreed time of delivery).',
        'Attitude of the Staff (Approachability; Courtesy).',
        'Quality of Service (Accuracy of reports/ Information; Credibility of staff).',
        'Sufficiency of service extended (Desired service substanyially met).',
        'Overall Perception of the Service(s) rendered.'
      ];
      for($i=0; $i<count($questions);$i++){
        echo '<tr>';
        echo '<td class="blur2 questions td">'.$questions[$i].'</td>';

        foreach(range(0,4) as $col){
          echo '<td class="blur2 rate row'.$i.'" data-col="'.$col.'" data-row="'.$i.'"></td>';
        }
        echo '</tr>';
      }
      ?>
    </tr>
  </table>
</div>
<script type="text/javascript">
let chartRate = [0,0,0,0,0]
let smiley =  ['happy','happy (1)','smile','sad','sad (1)'];
$(document).on('click','.rate', function(){
  let rowNo = $(this).data('row')
  let row = '.row'+rowNo
  let colNo = $(this).data('col')
  $(row).html('')
  $(this).append('<img src="images/clipart/'+ smiley[ colNo ] +'.png" style="width:50px;">')
  chartRate[ rowNo ] = colNo;
  data.chartRate= chartRate;
})
</script>
