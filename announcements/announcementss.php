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

      <!-- <table id="tbl_announcement" class="table" style="background:white">
        <thead>
          <tr><td></td></tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
          <tr><td></td></tr>
        </tfoot>
      </table> -->

			<div class="div_announcement" style="background:white;width:98%;overflow-y:auto;max-height:100%;padding:30px;">

				<ul id="posts" style="list-style:none"></ul>
				<p id="loading">I am loading</p>
			</div>

      <script type="text/javascript">
        $(document).ready(function(){

        // Get the last 10 announcements
				var count = 10;
				appendToAnnouncement(count);

        function appendToAnnouncement(count){
					$('#loading').css('display','block');
					$.ajax({
						url:'spec_func.php',
						data:{'type':'getAnnouncements','count':count},
					}).done(function(html){
						$('.div_announcement #posts').append(html);
						$('.div_announcement #loading').css('display','none');
					})
				};

         $('.headName span').text('Announcements');
         $('.headName img').attr('src','images/clipart/announcements.png')

				 var win = $('#div_announcement');

			 	function checkForNewDiv(){
				  // var lastLi = $('#posts > li:last-child');
				 // var mainLi = $('#posts');
				 // var lastLiOffset = mainLi.offset().top + lastLi.height;
				 // var pageOffset = mainLi.offset().top + mainLi.height;
				 // if(pageOffset > lastLiOffset - 10){
					//  count += 10;
					// // appendToAnnouncement(count);
					// $('#posts').append('<li>Hello World</li>');
					//  checkForNewDiv();
				 // }

				 var lastDiv = document.querySelector('#posts > li:last-child');
				 var mainDiv = document.querySelector('#posts');
				 var lastDivOffset = lastDiv.offsetTop + lastDiv.clientHeight;
				 var pageOffset = maindiv.offsetTop + mainDiv.clientHeight;
				 if(pageOffset > lastDivOffset - 10){
					 $('#posts').append('AWESOME!');
					 checkForNewDiv();
				 }
			 }

			 checkForNewDiv();

				 //Each time the user scrolls
				 // win.scroll(function(){
         //   // End of the document reached?
					//  if($(document).height() - win.height() == win.scrollTop()){
					// 	 $('#loading').show();
         //
					// 	 $.ajax({
					// 		 url:'spec_func.php?announcements',
					// 		 dataType:'html',
					// 	 }).done(function(html){
					// 		 $('#posts').append(html);
					// 		 $('#loading').hide();
					// 	 })
					//  }
				 // })

         // var count = 0;
      	 // var data_count = <?php #echo json_encode($count); ?>;
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
        });
      </script>
