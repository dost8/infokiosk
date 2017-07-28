<style media="screen">
  .div1{
    margin: 10% 41%;
    background: white;
    border-radius: 5px;
    height: 35%;
    text-align: center;
    padding: 5px;
  }
  .div1 img{
    height: 62%;
    width: 50%;
    margin: 9% 17%;
  }
  .div1 .text{
    font-size: 120%;
  }
</style>
<div class="div1 col-lg-3">
  <img src="images/clipart/load.gif" alt="">
  <p class="text"><b>Checking for Updates...</b></p>
</div>

<script type="text/javascript">
// will display "Download success" if there is download or time execution is greater than 10 seconds
var downloadProxy = true;
  $.ajax({
    url:'spec_func.php',
    data : {
      'type' : 'updateKiosk'
    }
  }).done(function(res){
    $('.div1 img').attr('src','images/clipart/update-done.png');

    if(res == 'up-to-date'){
      $('.div1 p b').text('Information Kiosk is Up-to-date.');
    }else{
      $('.div1 p b').text('Information Kiosk, Download Succesfull.');
    }

    downloadProxy = false;

    $('.menu-button6').css('background','none');
    $('.menu-button6 p').text('UPDATES');
  });

  setTimeout(function(){
    if(downloadProxy){
      $('.text b').text('Downloading updates.');
    }
  },8000);
</script>
