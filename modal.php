<div class="modal fade" id="video_intro" tabindex="-1" aria-hidden="true" aria-labelledBy="Introduction Video">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background:rgb(0, 4, 23)">
      <div class="modal-body">
        <video  autoplay width="860" height="500">
          <source src="images/N0.mp4">
        </video>
      </div>
    </div>
  </div>
</div>

<!-- Modal for the Menu -->
<div class="modal fade" id="menu_modal" tabindex="-1" aria-hidden="true" aria-labelledBy="Menu Modal">
  <div class="modal-dialog modal-lg" style="margin-top:12%;width:66%;">
    <div class="modal-content" style="background:rgba(0, 80, 110, 0.19)" >
      <div class="modal-body">
        <div class="row" style="margin-left:2.5%">
          <?php $title = ['organization','technology','feedback','portals','laboratory','about', 'update'];
          foreach(range(0,3) as $button): ?>
            <a href="#<?=$title[$button]?>">
              <div class="menu-button menu-button<?=$button?> col-sm-2" style="margin-left:5%;margin-right:5%">
                <img src="images/clipart/<?=$title[$button]?>.png">
                <p><?= strtoupper( $title[$button] )?></p>
              </div>
            </a>
          <?php endforeach?>
        </div>
        <div class="row" style="margin-left:13.5%;margin-top:5%">
          <?php foreach(range(4,6) as $button): ?>
            <a href="#<?=$title[$button]?>">
              <div class="menu-button menu-button<?=$button?> col-sm-2" style="margin-left: 10%;">
                <img src="images/clipart/<?=$title[$button]?>.png">
                <p><?= strtoupper( $title[$button] ) ?></p>
              </div>
            </a>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="prompt_modal" tabindex="-1" aria-hidden="true" aria-labelledBy="Prompt Modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row" style="text-align:center">
          <p>Cancel Current Activity?</p>
          <button class="btn" type="button" name="button" onclick="continueTask(false)">Yes</button>
          <button class="btn" type="button" name="button" onclick="continueTask(true)">No</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="orgProfile_modal" tabindex="-1" aria-hidden="true" aria-labelledBy="Organization view profile">
  <div class="modal-dialog modal-lg" style="margin-top:10%;width:40%">
    <div class="modal-content" style="background:rgb(196,196,196);min-height:20%" style="">
      <div class="modal-header" style="border-bottom:none;">
        <button type="button" class="close" data-dismiss="modal" aria-label>
          <img src="images/clipart/close.png" alt="">
        </button>
      </div>
      <div class="modal-body" style="max-height:600px;overflow-y:auto;">
      </div>
    </div>
  </div>
</div>

<style media="screen">
  .tech_modal .modal-header{
    background: #e7e7e7;
    color: #5e5e5e;
    padding: -20px;
    border-bottom: 1px solid #cfc9c9;
  }
  .tech_modal .modal-header p{
    margin:0px;
    font-size:23px;
  }
  .tech_modal .modal-body{
    padding:0px;
  }
  .tech_modal .main-nav, .tech_modal .arm-nav{
    background: #e7e7e7;
    border-right: 1px solid #cfc9c9;
  }
  .tech_modal ul{
    list-style: none;
    color: #23527c;
    padding-left: 0px;
  }
  .tech_modal li{
    padding: 8px;
    padding-left: 18px;
    border-bottom: 1px solid #cfc9c9;
    cursor: pointer;
  }
  .tech_modal .div-frame{
    width: 61.6%;
    position: absolute;
    right: -44px;
    padding: 0px;
  }

  #dostTech_modal .modal-dialog, #vsuTech_modal .modal-dialog{
    width: 79%;
  }
  #dostTech_modal .modal-content, #vsuTech_modal .modal-content{
    margin-top: 100px;
    height: 83.8%;
}
</style>

<div class="modal fade tech_modal" id="dostTech_modal" tabindex="-2" aria-hidden="true" aria-labelledBy="Modal view for DOST Technologies">
  <div class="modal-dialog" style="width:94%">
    <div class="modal-content">
      <div class="modal-header" style="padding-bottom:0px">
        <button class="close" type="button" name="button" data-dismiss="modal" aria-label>
          <span aria-hidden="true">&times;</span>
        </button>
        <p><i class="fa fa-briefcase"></i> 1st DOST TECHNOLOGY TRANSFER DAY <br> Promoting Research and Outstanding Milestones in Innovation and Science for Entrepreneurship</p>
        <form action="" method="POST" onsubmit="event.preventDefault()" class="pull-right" style="opacity:0">
          <span style="display:none"><b>File has been sent.</b></span>
          <img class="emailLoadGif" src="images/clipart/load.gif" alt="loading screen" style="width:35px;display:none">
          <input type="email" name="" value="" required="required" class="input_sendEmail">
          <button class="btn btn-default btn_sendEmail" type="submit" name="button">Send me a Copy.</button>
        </form>
      </div>
      <div class="modal-body">
        <div class="main-nav col-lg-2" style="width:230px;height:625px;">
          <ul>  </ul>
        </div>
        <div class="arm-nav col-lg-2" style="width:25.7%;height: 625px;">
          <ul>  </ul>
        </div>
        <div class="col-lg-7" style="height:625px;width:886px;">
        </div>
      </div>
    </div>
  </div>
</div>

<style media="screen">
</style>
<div class="modal fade tech_modal" id="vsuTech_modal" tabindex="-2" aria-hidden="true" aria-labelledBy="Modal view for VSU Technologies">
  <div class="modal-dialog" style="width:94%;">
    <div class="modal-content ">
      <div class="modal-header" style="padding-bottom:0px">
        <button class="close" type="button" name="button" data-dismiss="modal" aria-label>
          <span aria-hidden="true">&times;</span>
        </button>
        <p><i class="fa fa-briefcase"></i> Technopinoy Online Dashboard</p>
        <form action="" method="POST" onsubmit="event.preventDefault()" class="pull-right" style="opacity:0">
          <span style="display:none"><b>File has been sent.</b></span>
          <img class="emailLoadGif" src="images/clipart/load.gif" alt="loading screen" style="width:35px;display:none">
          <input type="email" name="" value="" required="required">
          <button class="btn btn-defult btn_sendEmail" type="submit" name="button">Send me a Copy.</button>
        </form>
      </div>
      <div class="modal-body">
        <div class="main-nav col-lg-2" style="width:230px;height: 642px;">
          <ul>
          </ul>
        </div>
        <div class="arm-nav col-lg-2" style="width:25.7%;height: 642px;">
          <ul>

          </ul>
        </div>
        <div class="col-lg-7" style="height:655px;width:886px;">
        </div>
      </div>
    </div>
  </div>
</div>
<style media="screen">
  #iframe_modal .modal-content{
    width: 180%;  height: 85%;
    left: -40%;
    /*box-shadow: -2px -2px 0px 10px rgba(4, 1, 34, 0.87)*/
    border: 10px solid rgba(4, 1, 34, 0.87);
  }
  #iframe_modal iframe{
    min-width: 100%;
    min-height: 100%;
  }
  #iframe_modal .links{
    height: 10%;  width: 40%;
    position: absolute;
    left: 33%; bottom:1%;
  }
  #iframe_modal .links img{
    height: 90%;
    margin-left: 10%;
  }
</style>
<div class="modal fade" id="iframe_modal" tabindex="-1" aria-hidden="true" aria-labelledBy="Iframe for outside links">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>

<!-- MOdal for update -->
<div class="modal fade" id="update_modal" tabindex="-1" aria-hidden="true" aria-label="display info for downloading update">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body" style="text-align:center">
        <div class="updating">
          <img src="images/clipart/load.gif" alt="" style="width:70px;">
          <span><b>Information Kiosk is Updating.</b></span>
        </div>
        <div class="done" style="display:none;">
          <p><b>Update successful. Click button to refresh.</b></p>
          <button class="btn btn-primary" type="button" name="button" onclick="window.location = '/tech4ed'"></button>
        </div>
        <div class="noneed" style="display:none">
          <p><b>System, Already Up-to-Date.</b></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="alerts" tabindex="-1" aria-hidden="true" aria-labelledBy="For messages">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>
