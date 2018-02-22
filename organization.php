<?php
require_once('cls.operations.php');
$operation = new Operations();
$result = $operation->selectData('organization_head',['_id','name','date','position']);
?>
<style media="screen">
  .org-titles{

  }
</style>
<!-- Adding of nodes -->


<div class="orgList-block" style="min-width:100%; min-height:100%;background:rgb(52,73,94);border-radius:5px;box-shadow: 10px 8px 50px 10px rgba(9, 5, 3, 0.85);text-align:center">

<?php foreach($result as $key => $node):
  $position=explode(',', $node['position']);
?>
  <a href="#" onclick="event.preventDefault()">
    <div class="org-block" style="left:<?=$position[0]?>px;top:<?=$position[1]?>px" data-id="<?=$node['_id']?>">
      <p class='org-titles'><?=$node['name']?></p>
      <!-- generate the list of employees inside the Unit node -->

    </div>

  </a>

<?php endforeach ?>
    <img src="images/clipart/org-chart.png" width="85%" alt="" style="position:absolute;left:0%;top:-3.5%;width:1480">
</div>

<div class="addNodeBtn">
  <button type="button" name="button" class="btn btn-info" style="width:38px;position:absolute;left:1440px;top:20px;" onclick="addOrgNode()"><i class="fa fa-plus"></i></button>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Organization')
    $('.headName img').attr('src','images/clipart/organization.png')

    // Loop each div then set its line height:
    // Oh men, this will make the page load slower
    $('.org-block').each(function(){
      var spanHeight = $(this).children('.org-titles').height();
      // (block height / 2) + 5 - span height;
      var paddingHeight = 35 - spanHeight;
      $(this).css('padding-top',paddingHeight+'px');
      console.log(spanHeight, paddingHeight);
    })
  })
  // Creating node function
var temp_position = [0,0];
var temp_org_block = '<div class="org-block temp_org_block" style="background:red"><p style="color:white"></p></div>';
function addOrgNode(){
 alert('Select position on where to apply new node. Press escape to cancel.');
 $('.orgList-block').append('<div class="temp_node_platform" style="position:absolute;width:100%;height:100%;"></div>');
 $('.orgList-block').append(temp_org_block);

 $(document).bind('mousemove', function(e){
   // If cursor is over the organization box then display the temporary node div
   if($('.temp_node_platform:hover').length > 0){
     $('.temp_org_block').css('display','block');
   }else{
     $('.temp_org_block').css('display','none');
   }
   // !Important; If cursor is over on an already created node, then creation is disabled
   if( $('.org-block:hover').length != 0 ){
     console.log( $('.org-block:hover').length );
     $('.temp_org_block p').text('Node already created');
   }else{
     console.log( $('.org-block:hover').length );
     $('.temp_org_block p').text( $('#createNode .modal-body #nodeName').val() );
   }

   // Set css properties of div using the offset from mousemove event
   $('.temp_org_block').css({
     'left':e.pageX-55,
     'top':e.pageY-110
   });
 });

// Cancel of Creation or Update of nodes
 $(document).keyup(function(e){0
   if(e.keyCode == 27){
     $('.temp_org_block, .temp_node_platform').remove();
   }
 })

 $(document).on('click', '.temp_node_platform', function(e){
   temp_position = [e.pageX-55, e.pageY-110];

   $('#createNode').modal('show');
   $('#createNode .modal-body #posX').val( temp_position[0] );
   $('#createNode .modal-body #posY').val( temp_position[1] );
   $('.temp_org_block').remove();
 });
}

function saveOrgNode(){
  var modal = '#createNode';

  $.ajax({
    url:'spec_func.php',
    data:{
      'type':'addOrgNode',
      'name':$(modal+' .modal-body #nodeName').val(),
      'posX':$(modal+' .modal-body #posX').val(),
      'posY':$(modal+' .modal-body #posY').val(),
      'clickable':$(modal+' .modal-body #clickable').val(),
    }
  }).done(function(){
    $(modal).modal('hide');

    var respNode = '<a href="#" onclick="event.preventDefault()">';
    respNode += '<div class="org-block" style="left:'+temp_position[0]+';top:'+temp_position[1]+'" >';
    respNode += '<p class="org-titles">'+$(modal+' .modal-body #nodeName').val()+'</p>';
    respNode += '</div></a>';

    $('.orgList-block').append(respNode);
    alert('Creation of organization node success');
  });


}
</script>
