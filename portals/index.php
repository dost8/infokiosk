
<style media="screen">
  .portals .block{
    color: white;
    background: rgba(0, 0, 0, 0.5);
    border:1px inset black;
    border-radius: 5px;
    text-align: center;
    height: 210px;
    min-width: 228px !important;
  }
  .portals .block img{
    height: 100px;
    margin-top: 25px;
  }
</style>

<div class="container portals">
  <div class="row">
    <div class="col-md-5">
      <?php $title = [['One Expert','One Store','One Lab','Tech4ed','STARBOOKS'],[61,60,59,60,60]];
      $first_style = 'style="background:rgba(204, 202, 202, 0.6)"';
        foreach(range(0,4) as $i){
       ?>
       <div class="block col-sm-4" onclick="showLink('<?=$title[0][$i]?>')" <?= $first_style ?>>
          <img src="images/clipart/<?= $title[0][$i]?>.png" style="height:<?= $title[1][$i] ?>%">
         <p><?= $title[0][$i] ?></p>
       </div>
     <?php
      $first_style = '';
      }
      ?>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-6" id="link-desc" style="height:90%;overflow-y:overlay;">
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Portals')
    $('.headName img').attr('src','images/clipart/portals.png')

    showLink('One Expert');
  })

  $('.portals .block').on('click',function(){
    $('.portals .block').css('background','rgba(0, 0, 0, 0.5)');
    $(this).css('background','rgba(204, 202, 202, 0.6)')
  });

  // Display selected link to description div
  function showLink(t){
    $.ajax({
      url:'portals/'+t+'-desc.php'
    }).done(function(r){
      $('#link-desc').html(r);
    })
  }

  $(document).on('click','.onelab-buttons > div',function(){
    $('#button-name').html( $(this).data('name') )

    // Set images back to default
    var src = 'images/clipart/'
    $('.chemical img').attr('src',src+'chemical1.png')
    $('.micro img').attr('src',src+'micro1.png')
    $('.calib img').attr('src',src+'calibration1.png')
    $('.radio img').attr('src',src+'radiological1.png')
    $('.physical img').attr('src',src+'physical1.png')

    // Change image of the selected button
    $(this).children('img').attr('src','images/clipart/'+ $(this).data('image') +'2.png')
  });

  function openModalLink(link, name){
    event.preventDefault();
    //$('#viewLinks .modal-body').html('<iframe src="https://9gag.com/trending" width="1520px" height="730px" frameborder="0" allowfullscreen></iframe>');
    $('#viewLinks .modal-body').html('<iframe id="iframeLink" src="'+link+'" width="1548px" height="770px" frameborder="0" allowfullscreen></iframe>');
    $('#viewLinks .modal-header .modal-title').text( name );
    $('#viewLinks').modal('show');
  }
</script>
