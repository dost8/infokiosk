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

			<style media="screen">
				.div_announcement li{
					border-top: 2px solid #ccc;
					border-bottom: 1px solid #ccc;
					text-align: justify;
					padding: 0 15 0 10;
					min-height:100px;
				}
				.div_announcement li:hover{
					background-color: #b9d4dc;
				}

				.div_announcement li h2{
					color: #2ba6cb;
					font-weight: 400;
				}
				.div_announcement li span{
					color:#ccc;
				}
				.div_announcement .hiddenText{
					display:none;
				}
			</style>

			<div class="div_announcement" id="scroll-content" style="background:white;width:100%;height:100%;padding-top:50px;position:relative;background:#e7e7e7;box-radius:20px;">
				<input type="text" name="" value="" class="form-control" style="position:fixed;right:60px;margin-top:-41px;width:25%;" placeholder="Search">
				<div class="" style="overflow:scroll;height:695px;background:white;">
					<ul class="posts" style="width:98%;list-style:none">

					</ul>
				</div>

				<p id="loading">WAIT!!!</p>
			</div>

      <script type="text/javascript">
        $(document).ready(function(){

        // Get the last 10 announcements
				var counter = 10;
        var id = 0;
				var lastId = -1;
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
        var div = $('.div_announcement div');
        div.scroll(function(){
					var lastChild = $('.div_announcement li:last-child');
					var lastChildOffset = lastChild.offset();

          // Calculate difference between Height and offset of both .div_announcement and Last li-child
          // If less greater than 50, run appendToAnnouncement function with 'Counter' as parameter
          if( ( (div.height() + div.scrollTop() ) - (lastChild.height() + lastChildOffset.top) ) >= 5){
						id = lastChild.data('id');
						if(lastId != id){
							if(id > firstId){
								lastId = id;
								$('.div_announcement #loading').css('display','block');
								appendToAnnouncement(counter, id);
							}
						}
          }
        })

				$('.div_announcement input').keyup(function(){
					$('.div_announcement #loading').css('display','block');
					var keyword = $(this).val();

					if(keyword == ''){
						$('.div_announcement .posts').html('');

						counter = 10;
						id = 0;
						lastId = -1;
						appendToAnnouncement(counter, id);
					}else{
						$.ajax({
							url:'spec_func.php',
							data:{'type':'getSpecificAnnouncements','keyword':keyword}
						}).done(function(html){
							$('.div_announcement #loading').css('display','none');
							$('.div_announcement .posts').html(html);
						});
					}
				});

				$(document).on('click','.div_announcement li', function(){
					var modal = '#announcements-modal ';
					$(modal+ '.modal-body h2').html( $(this).children('h2').html() );
					$(modal+ '.modal-body .postdate').html( $(this).children('.postDate').html() );
					$(modal+ '.modal-body .news').html( $(this).children('.news').html() );

					$(modal).modal('show');
				});

        //  $('.headName span').text('Announcements');
        //  $('.headName img').attr('src','images/clipart/announcements.png')
			});
      </script>
