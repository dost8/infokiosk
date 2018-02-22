<div class="news">
  <input type="text" class="form-control" id="newsTitle" name="" value="" placeholder="Article Title *">
  <br>
  <textarea id="wyswyg">

  </textarea>
</div>
<br>
<button type="submit" onclick="uploadNews()" class="btn btn-default pull-right">Submit</button>
<script type="text/javascript">

tinymce.init({
  selector: '#wyswyg',
  height: 500,
  plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools"
    ],
  toolbar: "insertfile undo redo | table | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});

$(document).ready(function(){
  $('.headName span').text('News')
  $('.headName img').attr('src','images/clipart/news.png')
});

function uploadNews(){

  if( $('#newsTitle').val() == "" ){
    $('#newsTitle').css('border','1px solid red');
    return false;
  }

    var content = tinyMCE.get('wyswyg').getContent();
    var title = $('#newsTitle').val();
    var data = [];
    if(content.includes('<img')){
      content.match(/<img src="(.*?)"/g).map(function(val){
        val = val.substring(10, (val.length - 1));
        data.push(val);
      });
    }
    data.join(',,');
    content.replace('&nbsp;',' ');

    $.ajax({
      url: 'spec_func.php',
      data: 'type=uploadNews&news='+content+'&url='+data+'&title='+title,
    }).done(function(r){
      $('#alerts .modal-body').html('Column has been uploaded');
    })
}
</script>
