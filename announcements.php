<!-- <?php
	#

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
	<?php
	include_once('cls.operations.php');
	$operations = new operations();
    // the in
		$firstId = $operations->selectQuery("SELECT _id FROM news ORDER BY _id ASC LIMIT 1");
	?>

			<div class="div_announcement" id="scroll-content" style="background:white;width:100%;height:100%;overflow:scroll;position:relative">
				<ul class="posts">

        </ul>
				<p id="loading">WAIT!!!</p>
			</div>

      <script type="text/javascript">
        $(document).ready(function(){

        // Get the last 10 announcements
				var counter = 10;
        var id = 0;
				var firstId = "<?php echo $firstId[0]['_id']; ?>";
			  appendToAnnouncement(counter, id);

        function appendToAnnouncement(count, id){
					$('#loading').css('display','block');
					$.ajax({
						url:'spec_func.php',
						data:{'type':'getAnnouncements','counter':counter,'id':id},
					}).done(function(html){
						$('.div_announcement .posts').append(html);
						$('.div_announcement #loading').css('display','none');
					})
				}

        // Get the Height + the offsetTop of .div_announcement DIV and last li child
        var div = $('.div_announcement');
        div.scroll(function(){
					var lastChild = $('.div_announcement li:last-child');
					var lastChildOffset = lastChild.offset();

          // Calculate difference between Height and offset of both .div_announcement and Last li-child
          // If less greater than 50, run appendToAnnouncement function with 'Counter' as parameter
          if( ( (div.height() + div.scrollTop() ) - (lastChild.height() + lastChildOffset.top) ) >= 5){
						id = lastChild.data('id');
						if(id > firstId){
							$('.div_announcement #loading').css('display','block');
							appendToAnnouncement(counter, id);
						}
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
