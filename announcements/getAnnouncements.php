<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<ul id="posts" style="list-style:none">

</ul>

<script type="text/javascript">
  var win = $(window);
  var count = 10;

  getBottomNews(count);

  // Each time the user scrolls
  win.scroll(function(){
    // End of the document reached.
    if($(document).height() - win.height() == win.scrollTop()){
      $('#loading').show();

      $.ajax({
        url:'spec_func.php',
        data:{
          'type':'getAnnouncements',
          'count':count
        }
      }).done(function(html){
        $('#posts').append(html);
        count += 10;
        $('#loading').hide;
      });
    }
  })

  function getBottomNews(count){
    $.ajax({
      url:'../spec_func.php',
      data:{
        'type':'getAnnouncements',
        'count':count
      },
    }).done(function(html){
      $('#posts').append(html);
      $('#loading').hide;
    });

    count += 10;
  }
</script>
