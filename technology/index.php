<style media="screen">
  .tech_link:hover, .tech_link:visited, .tech_link:active, .tech_link:focus{
    text-decoration: none;
  }
  .tech_link{
    background: red;
  }
  .tech_div{
    height: 30%;
    width: 70%;
    margin-left: 20%;
    margin-top: 3%;
    background: rgba(0, 0, 0, 0.82);
    border-radius: 5px;
    line-height: 200px;
    text-align: center;
    color: white;
    box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.86);

  }
  .tech_div > p{
    font-size: 60px;
    font-weight: bold;index
    font-family: Arial;
  }

</style>
<a href="#" target="_blank" class='tech_link' onclick="event.preventDefault()" data-toggle="modal" data-target="#dostTech_modal">
  <div class='tech_div'>
    <p>DOST Technologies</p>
  </div>
</a>

<a href="http://vicaarp.vsu.edu.ph/tpdonline/" target="_blank" class="tech_link" onclick="openLink('http://vicaarp.vsu.edu.ph/tpdonline/')">
  <div class="tech_div">
    <p>VSU - VICAARP Technology</p>
  </div>
</a>

<script type="text/javascript">
  $(document).ready(function(){
    $('.headName span').text('Technology')
    $('.headName img').attr('src','images/clipart/technology.png')
  })
</script>
