
HTML   JS  Result
Edit on 
<textarea id="wyswyg">
  
</textarea>
<button onclick="hulala()">Submit</button>
<script type="text/javascript">
    function getContent(){
        var content = tinyMCE.get('#wyswyg').content();
    }

    tinymce.init({
  selector: '#wyswyg',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
</script>