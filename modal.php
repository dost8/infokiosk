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
  <div class="modal-dialog modal-lg" style="margin-top:12%;">
    <div class="modal-content" style="background:none" >
      <div class="modal-body">
        <div class="row" style="margin-left:2.5%">
          <?php $title = ['organization','technology','feedback','portals','status','laboratory','about'];
          foreach(range(0,3) as $button): ?>
            <a href="#<?=$title[$button]?>">
              <div class="menu-button menu-button<?=$button?> col-sm-2" style="margin-right: 3.5%;">
                <img src="images/clipart/<?=$title[$button]?>.png">
                <p><?= strtoupper( $title[$button] )?></p>
              </div>
            </a>
          <?php endforeach?>
        </div>
        <div class="row" style="margin-left:15%;margin-top:5%">
          <?php foreach(range(4,6) as $button): ?>
            <a href="#<?=$title[$button]?>">
              <div class="menu-button menu-button<?=$button?> col-sm-2" style="margin-left: 5%;">
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
  #dostTech_modal .modal-dialog{
    width: 79%;
  }
  #dostTech_modal .modal-content{
    margin-top: 100px;
    height: 80%;
    background: none;
  }
  #dostTech_modal .pdf-block{
    margin-bottom: 30px;
  }
  #dostTech_modal .pdf-block img{
    width: 76;
    border: 5px solid white;
  }
</style>
<div class="modal fade" id="dostTech_modal" tabindex="-1" aria-hidden="true" aria-labelledBy="Modal view for DOST Technologies">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body container">
        <div class="row">
          <div class="col-sm-2" style="height:100%;">
            <div class="pdf-block" onclick="openLink('technology/agricultural-productivity.pdf','#dostTech_modal')">
              <img src="technology/ap.png" alt="">
            </div>
            <div class="pdf-block" onclick="openLink('technology/industry-competitiveness.pdf','#dostTech_modal')">
              <img src="technology/ic.png" alt="">
            </div>
            <div class="pdf-block" onclick="openLink('technology/country-development.pdf','#dostTech_modal')">
              <img src="technology/cd.png" alt="">
            </div>
            <div class="pdf-block" onclick="openLink('technology/environment-and-disaster-risk-reduction.pdf','#dostTech_modal')">
              <img src="technology/edrr.png" alt="">
            </div>
            <div class="pdf-block" onclick="openLink('technology/quality-healthcare.pdf','#dostTech_modal')">
              <img src="technology/qh.png" alt="">
            </div>
          </div>
          <div class="col-lg-9 div-frame" style="height:95%;width:83%;">
            <img src="technology/cover-photo.png" style="height:100%;">
            <!-- <iframe src="technology/cover-photo.png#view=fit" style="min-height:100%;min-width:100%;"></iframe> -->
            <!-- <object type="technology/environment-and-disaster-risk-reduction.pdf" data="https://"> -->
            </object>
          </div>
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
