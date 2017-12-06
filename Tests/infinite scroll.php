  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js" charset="utf-8"></script>
<div class="">
  <ul>
    <?php
      for($i = 1; $i < 10; $i++){
        echo '<li>'.$i.'</li>';
      }
    ?>
  </ul>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    var win = $(window);
  })
</script>
