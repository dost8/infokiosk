<!-- <?php
	#include_once('cls.operations.php');

	// $op = new Operations();
	// $result = array_reverse( $op->selectData('news',['news']) );
	// $count = 1;
	// $active = 'active';
	// #$li = null;
	// #$div = null;
	// $tr = null;
	// foreach($result as $key => $value){
	// 	#$li .= '<li data-target="#announcementCarousel" data-slide="'.$count.'" class="'.$active.'"></li>';
	// 	#$div .= '<div class="item '.$active.'">'.urldecode($value['news']).'<div>';
	// 	$tr .= '<tr><td>'.urldecode($value['news']).'</td></tr>';
	// 	$count++;
	//}
  ?> -->


			<div class="div_announcement" id="scroll-content" style="background:white;width:100%;height:100%;overflow:scroll  ;position:relative">
				<ul class="posts">

        </ul>
			</div>

      <script type="text/javascript">
        $(document).ready(function(){

        // Get the last 10 announcements
				var count = 10;
        var id = 0;
			  appendToAnnouncement(count);

        function appendToAnnouncement(count){
					$('#loading').css('display','block');
					$.ajax({
						url:'spec_func.php',
						data:{'type':'getAnnouncements','count':count,'id':id},
					}).done(function(html){
						$('.div_announcement .posts').append(html);
						$('.div_announcement #loading').css('display','none');
					})
				}

        var div = $('.div_announcement');
        div.scroll(function(){
          if( (div.height() - div.scrollTop()) <= 200){
            appendToAnnouncement(count);
          }
        })

        //  $('.headName span').text('Announcements');
        //  $('.headName img').attr('src','images/clipart/announcements.png')
});

         // var count = 0;
      	 // var data_count = 
      	 // var row_count = data_count / 3;
         //
         // var table = $('#tbl_announcement').DataTable({
         //    "aaSorting":[],
         //    "pageLength":3,
         //  });
         //
         //  var pageInfo = table.page.info();
         //
         //  $('#tbl_announcement_wrapper').css({
         //  	'background':'white',
         //  	'margin-top':'10px',
         //  	'min-height':'700px',
         //  	'max-height':'700px',
         //  	'overflow-y':'auto',
         //  });
         //
         //  $('#tbl_announcement_length').css('display','none');
         //  $('#tbl_announcement_filter input').addClass('form-control');
         //  $('#tbl_announcement_info').css('display','none');
         // $('#announcements .modal-body .dataTables_length').css('display','none');
        // });
      </script>
