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
