<div class="news">
  <textarea id="wyswyg">

  </textarea>
</div>
<br>
<button onclick="uploadNews()" class="btn btn-default pull-right">Submit</button>
<script type="text/javascript">

tinymce.init({
  selector: '#wyswyg',
  height: 500,
  plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools"
    ],
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});

function uploadNews(){
    var content = tinyMCE.get('wyswyg').getContent();
    var data = [];
    if(content.includes('<img')){
      content.match(/<img src="(.*?)"/g).map(function(val){
        val = val.substring(10, (val.length - 1));
        data.push(val);
      });
    }
    data.join(',,');

    $.ajax({
      url: 'spec_func.php',
      data: 'type=uploadNews&news='+content+'&url='+data
    }).done(function(){

    })

}
</script>
