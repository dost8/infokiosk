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
  $(document).ready(function(){
    $('.headName span').text('Technology')
    $('.headName img').attr('src','images/clipart/technology.png')
  })

var dataArr = {
  0:{
  },
  1:{
    0:{
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
    1:{
      0:'Corn Cassava',
      1:'Mais',
      2:'Steps in successful Hybrid Corn Culture'
    },
    2:{
      0:'Abaca Mosaic',
      1:'Abaka',
      2:'Ang Hustong Pag-abakahan',
      3:'Ang Paghimo ug Abaka Nursery',
      4:'Ang Pagkigi sa Abaca (Lanot)',
      5:'Paghimo ug Papel Gikan sa Abaka',
      6:'Teknologiya as Abaka (Musa Textilis Nee)'
    },
    3:{
      0:'Final Jackfruit Primer Cebuano',
      1:'Final Jackfruit Primer English',
      2:'Jackfruit Leaflet no.1 Plant Nursery Best Practices',
      3:'Jackfruit Leaflet no.2 Cleft G',
      4:'Jackfruit Leaflet no.3 Coffee',
      5:'Jackfruit Leaflet no.4 Nangka',
      6:'Jackfruit Leaflet no.5 Marmala',
      7:'Jackfruit Leaflet no.6 Puree',
      8:'Jackfruit Leaflet no.7 Jam',
      9:'Jackfruit Leaflet no.8 Wine',
      10:'Jackfruit Leaflet no.9 Vinegar'
    }
  }
}
  $('.tech_modal li').on('click',function(){
    let dataIndex = $(this).data('index').toString().split(',')
    let list = dataArr[ dataIndex[0] ][ dataIndex[1] ];
    for(let key in list){
      
    }
  })
</script>
