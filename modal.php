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
    <div class="modal-content" style="background:rgb(196,196,196);min-height:20%">
      <div class="modal-header">
        <button type="button" class="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="dostTech_modal" tabindex="-1" aria-hidden="true" aria-labelledBy="Modal view for DOST Technologies">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="link_block">
            string....
          </div>
          <div class="link_block">
            string 1....
          </div>
          <div class="link_block">
            string 2....
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
</style>
<div class="modal fade" id="iframe_modal" tabindex="-1" aria-hidden="true" aria-labelledBy="Iframe for outside links">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <iframe src=""  style="overflow:auto"></iframe>
    </div>
  </div>
</div>
