<button type="button" name="button" onclick="hello('string1',123)">
  click me
</button>

<script type="text/javascript">
  var data = {
    'string1' : ''
  }
  console.log(data);
  function hello(e, v){
    console.log(e);
    var elem = e;
    data.elem = v;
    console.log(data);
  }
</script>
