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
<a href="#" target="_blank" class='tech_link' onclick="event.preventDefault()" data-toggle="modal" data-target="#dostTech_modal">
  <div class='tech_div'>
    <p>DOST Technologies</p>
  </div>
</a>

<a href="#" target="_blank" class="tech_link" onclick="event.preventDefault()" data-toggle="modal" data-target="#vsuTech_modal">
  <div class="tech_div">
    <p>VSU - VICAARP Technology</p>
  </div>
</a>

<script type="text/javascript">

  var dataArr = {
    0:{
      // index 0 are for the titles
      0:{
        0:'Agricultural Productivity',
        1:'Country Development',
        2:'Environment and Disaster Risk Reduction',
        3:'Industry Competitiveness',
        4:'Quality Healthcare'
      },
      // From here all index are values from titles above
      1:{
        0:'Fertilizers and Plant Growth Enhancers',
        1:'Postharvest and Diagnostic Devices',
        2:'Machineries and Process for Agri and Aqua'
      },
      2:{
        0:'Crafts and Textiles',
        1:'Forest Products and Processes'
      },
      3:{
        0:'Environmental Monitoring and Restoration'
      },
      4:{
        0:'Food Products and Processing',
        1:'Food Innovation Center',
        2:'Transportation and Technology Services',
        3:'ICT-Based Learning and Empowerment'
      },
      5:{
        0:'Healthcare Innovations for Filipinos'
      }
    },
    1:{
      // index 0 are for the titles
      0:{
        0:'Coconut',
        1:'Corn',
        2:'Fiber',
        3:'Jackfruit'
      },
      // From here all index are values from titles above
      1:{
        0:'7 steps to grow coconut seedlings',
        1:'8 tips to increase copra yield',
        2:'A simple way of making charcoal from Binoungan',
        3:'Cassava Coconut Cookies',
        4:'Characteristics of Different ViSCA Coconut Accessions',
        5:'Coco Fresh',
        6:'Coco Kisses',
        7:'Coco Vinegar',
        8:'Everything You Always Wanted to Know About Coconut'
      },
      2:{
        0:'Corn Cassava Intercropping',
        1:'Mais',
        2:'Steps in Successful Hybrid Corn Culture'
      },
      3:{
        0:'Abaca Mosaic',
        1:'Abaka',
        2:'Ang Hustong Pag-abakahan',
        3:'Ang Paghimo ug Abaka Nursery',
        4:'Ang Pagkigi sa Abaka (Lanot)',
        5:'Paghimo ug Papel Gikan sa Abaka',
        6:'Teknologiya sa Abaka (Musa Textilis Nee)'
      },
      4:{
        0:'Final Jackfruit Primer Cebuano',
        1:'Final Jackfruit Primer English',
        2:'Plant Nursery Best Management Practices on Phytophtora Disease',
        3:'Production of Cleft-Grafted Jackfruit',
        4:'How to make Coffee-like drink from Jackfruit Seeds',
        5:'How to make Nangka (Jackfruit) Juice',
        6:'How to make Jackfruit Marmalade',
        7:'How to make Jackfruit Puree',
        8:'How to make Jackfruit Jam',
        9:'How to make Jackfruit Wine',
        10:'How to make Jackfruit Vinegar'
      }
    }
  }

  $(document).ready(function(){
    $('.headName span').text('Technology')
    $('.headName img').attr('src','images/clipart/technology.png')

    // For DOST Tech Main navigation
    let dataList = dataArr[0][0];
    for(let key in dataList){
      $('#dostTech_modal .main-nav ul').append('<li data-index="0,'+key+'"><i class="fa fa-folder-open"></i>'+dataList[key]+'</li>')
    }

    // For VSU Tech Main navigation
    dataList = dataArr[1][0];
    for(let key in dataList){
      $('#vsuTech_modal .main-nav ul').append('<li data-index="1,'+key+'"><i class="fa fa-folder-open"></i>'+dataList[key]+'</li>')
    }
  })


  var armNavDisplay = false;
  $(document).on('click','.tech_modal li',function(){
    // get data attr "index" then split index for the corresponding index for JSON
    let dataIndex = $(this).data('index').toString().split(',')
    let modal = (dataIndex[0] === "0") ? '#dostTech_modal' : '#vsuTech_modal';

    if(dataIndex.length == 2){
      // clear secondary navigation everytime a main navigation is clicked
      $('.arm-nav ul').html('')
      $('.main-nav li').css('background','none')
      // Fetch data from dataArr by supplying the given index
      dataIndex[1] = parseInt(dataIndex[1])+1
      let dataList = dataArr[ dataIndex[0] ][ dataIndex[1] ];
      for(let key in dataList){
        let title = dataList[key]
        $(modal + ' .arm-nav ul').append('<li data-index="'+dataIndex[0]+','+dataIndex[1]+','+key+'"><i class="fa fa-file-pdf-o"></i> '+title+'</li>')
      }
    }
    if(dataIndex.length == 3){
      $('.arm-nav li').css('background','none');
      let parentDir = (dataIndex[0] === "0" ? 'dost_tech' : 'vsu_tech');
      let link = 'technology/'+parentDir+'/'+dataArr[ dataIndex[0] ][ dataIndex[1] ][ dataIndex[2]]+'.pdf';
      openLink( link, modal)
    }
    $(this).css('background','rgb(210, 210, 210)');
  })
</script>
