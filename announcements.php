<?php 
	include_once('cls.operations.php');

	$op = new Operations();
	$result = array_reverse( $op->selectData('news',['news']) );
	$count = 1;
	$active = 'active';
	#$li = null;
	#$div = null;
	$tr = null;
	foreach($result as $key => $value){
		#$li .= '<li data-target="#announcementCarousel" data-slide="'.$count.'" class="'.$active.'"></li>';
		#$div .= '<div class="item '.$active.'">'.urldecode($value['news']).'<div>';
		$tr .= '<tr><td>'.urldecode($value['news']).'</td></tr>';
		$count++;
	}
 ?>

      <table id="tbl_announcement" class="table" style="background:white">
        <thead>
          <tr><td></td></tr>
        </thead>
        <tbody>
          <?= $tr ?>
        </tbody>
        <tfoot>
          <tr><td></td></tr>
        </tfoot>
      </table>
      <script type="text/javascript">
        $(document).ready(function(){
         var count = 0;
      	 var data_count = <?php echo json_encode($count); ?>;
      	 var row_count = data_count / 3;

         var table = $('#tbl_announcement').DataTable({
            "aaSorting":[],
            "pageLength":3,
          });

          var pageInfo = table.page.info();

          $('#tbl_announcement_wrapper').css({
          	'background':'white',
          	'margin-top':'10px',
          	'min-height':'700px',
          	'max-height':'700px',
          	'overflow-y':'auto',
          });

          $('#tbl_announcement_length').css('display','none');
          $('#tbl_announcement_filter input').addClass('form-control');
          $('#tbl_announcement_info').css('display','none');
         // $('#announcements .modal-body .dataTables_length').css('display','none');
        });
      </script>