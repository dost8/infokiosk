<style media="screen">
  .tech_link:hover, .tech_link:visited, .tech_link:active, .tech_link:focus{
    text-decoration: none;
  }
  .tech_link{
    background: red;
  }
  .tech_div{
    height: 30%;
    width: 70%;
    margin-left: 15%;
    margin-top: 3%;
    background: rgba(0, 0, 0, 0.82);
    border-radius: 5px;
    line-height: 200px;
    text-align: center;
    color: white;
    box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.86);

  }
  .tech_div > p{
    font-size: 60px;
    font-weight: bold;index
    font-family: Arial;
  }

</style>
<a href="#" target="_blank" class='tech_link' onclick="event.preventDefault()" data-target="dostTech">
  <div class='tech_div'>
    <p>DOST Technologies</p>
  </div>
</a>

<a href="#" target="_blank" class="tech_link" onclick="event.preventDefault()" data-target="vsuTech">
  <div class="tech_div">
    <p>VSU - VICAARP Technology</p>
  </div>
</a>

<script src="technology/techList.js" charset="utf-8"></script>
<script type="text/javascript">


  $(document).ready(function(){
    $('.headName span').text('Technology')
    $('.headName img').attr('src','images/clipart/technology.png')
  })

  $('.tech_link').on('click', function(){
    // Clear list
    var techListModal = ".tech_modal.techList-modal";
    $(techListModal+' .main-nav ul').html('');
    $(techListModal+' .arm-nav ul').html('');
    $(techListModal+' form').css('opacity','0');
    $(techListModal+' img.emailDoneGif').css('display','none');

    var target = $(this).data('target');
    if(target == 'dostTech'){
      var header = "1st DOST TECHNOLOGY TRANSFER DAY <br> Promoting Research and Outstanding Milestones in Innovation and Science for Entrepreneurship.";
      var dataList = dataArr[0][0];
      var index = 0;
    }else{
      var header = "Technopinoy Online Dashboard";
      var dataList = dataArr[1][0];
      var index = 1;
    }

    for(let key in dataList){
      $('.tech_modal.techList-modal .main-nav ul').append('<li data-index="'+index+','+key+'"><i class="fa fa-folder-open"></i>'+dataList[key]+'</li>')
    }

    $('.tech_modal .modal-header .header-text').text('').append(header);
    $('.tech_modal.techList-modal').modal('toggle');
  })

  var armNavDisplay = false;
  var link = null;
  var filename = null;
  $(document).on('click','.tech_modal li',function(){
    var parent = $(this).parents('.tech_modal');
    // get data attr "index" then split index for the corresponding index for JSON
    let dataIndex = $(this).data('index').toString().split(',')

    if(dataIndex.length == 2){
      // clear secondary navigation everytime a main navigation is clicked
      $('.arm-nav ul').html('')
      $('.main-nav li').css('background','none')
      // Fetch data from dataArr by supplying the given index
      dataIndex[1] = parseInt(dataIndex[1])+1
      let dataList = dataArr[ dataIndex[0] ][ dataIndex[1] ];
      for(let key in dataList){
        let title = dataList[key]
        $('.tech_modal.techList-modal' + ' .arm-nav ul').append('<li data-index="'+dataIndex[0]+','+dataIndex[1]+','+key+'"><i class="fa fa-file-pdf-o"></i> '+title+'</li>')
      }
    }
    if(dataIndex.length == 3){
      let parentDir = (dataIndex[0] === "0" ? ['dost_tech','#dostTech_modal'] : ['vsu_tech','#vsuTech_modal']);
      let filename = dataArr[ dataIndex[0] ][ dataIndex[1] ][ dataIndex[2]];
      link = 'technology/'+parentDir[0]+'/'+filename+'.pdf';
      $('.arm-nav li').css('background','none');
      $('.techList-modal form').css('opacity','1')
      openLink( link, '.tech_modal.techList-modal')
    }
    $(this).css('background','rgb(210, 210, 210)');
  })

  // Send PDF Technology through Email
  $('.btn_sendEmail').click(function(){
    if(!(/\S+@\S+\.\S+/.test( $('.input_sendEmail').val() ))){
      return false;
    }
    var parent = $(this).parent();
    $(parent).children('img.emailLoadGif').css('display','inline')
    $.ajax({
      url:'spec_func.php',
      data:{
        'type' : 'emailSend',
        'emailAdd' : $('.input_sendEmail').val(),
        'file' : link
      }
    }).done(function(){
      $(parent).children('img.emailLoadGif').css('display','none')
      $(parent).children('img.emailDoneGif').css('display','inline')
    });
  })

  // View PDF largely
  $('.btn_enlargePDF').click(function(){
    openLink(link, '#enlarge_pdf', '96%');
    let filename = link.toString().split('/');
    $("#enlarge_pdf #pdfTitle").text(filename[2])

    $('#enlarge_pdf').modal({
      backdrop:'static',
      keyboard:false
    });
  });
</script>
