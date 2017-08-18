<style media="screen">
  .chart3 h1, .chart3 p{
    letter-spacing: 11px;
    font-family: 'Anton', sans-serif;
  }
  .chart3 textarea{
    margin: 0% 2%;
    width: 95%;
    height: 73%;
    border-radius: 25px;
    padding: 20px;
    resize: none;
    font-size: 30px;
    color: rgb(143, 139, 139);
  }
  .hand-gesture{
    position: fixed;
    z-index: 1;
    width: 17%;
    left:-25px;
    bottom: -22px;
  }
  .preview.btn{
    right: 70px;  bottom:0px;
    position: absolute;
    font: 33px 'Anton';
    color: white;
    letter-spacing: 7px;
    border-radius: 14px;
  }
</style>
<img class="hand-gesture" src="images/clipart/hand-gesture.png" alt="">
<div class="chart3" style="color:white;font-weight:600;height:100%;">
  <h1 style="font-size:70px;margin:0 3%">Feedback</h1>
  <p style="font-size:30px;margin:0 3%">Comment/suggestions to improve our services:</p>
  <textarea class="commentTxt" name="name" rows="8" cols="80" placeholder="Your comments are greatly appreciated"></textarea>
  <button onclick="previewFeedback()" class="preview btn btn-default" type="button" name="button" style="background:rgb(74, 165, 170)">Preview</button>
</div>
