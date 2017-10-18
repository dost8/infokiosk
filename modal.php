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
  <div class="modal-dialog modal-lg" style="margin-top:12%;width:75%">
    <div class="modal-content" style="background:rgba(0, 80, 110, 0.19)" >
      <div class="modal-body">
        <div class="row">
          <?php $title = ['organization','technology','feedback','portals','announcements','laboratory', 'about','status','uploads'];
          foreach(range(0,3) as $button): ?>
            <a href="#<?=$title[$button]?>" class="menu-button menu-button<?=$button?>" >
              <!-- <div class="menu-button menu-buttonol-sm-5" style="margin-left:5%;margin-right:5%"> -->
                <img src="images/clipart/<?=$title[$button]?>.png">
                <p><?= strtoupper( $title[$button] )?></p>
              <!-- </div> -->
            </a>
          <?php endforeach?>
        </div>
        <div class="row" style="margin-left:-1.5%;margin-top:5%">
          <?php foreach(range(4,6) as $button): ?>
            <a href="#<?=$title[$button]?>" class="menu-button menu-button<?=$button?>">
                <img src="images/clipart/<?=$title[$button]?>.png">
                <p><?= strtoupper( $title[$button] ) ?></p>
            </a>
          <?php endforeach ?>
        </div>
        <?php
          if($operation->online){
            echo '<div class="row" style="margin-top:5%;margin-left:28%">';
              foreach(range(7,8) as $button){
                echo '<a href="#'.$title[$button].'" class="menu-button menu-button'.$button.'" >
                  <img src="images/clipart/'.$title[$button].'.png">
                  <p>'.strtoupper( $title[$button] ).'</p>
                </a>';

              }
            echo '</div>';
          }
         ?>
      </div>
    </div>
  </div>
</div>

<!-- Feedback modals -->
<div class="modal fade" id="feedback_modal" tabindex="-1" aria-hidden="true" aria-labelledBy="feedback modal" style="font-family:monospace">
  <div class="modal-dialog modal-lg" style="margin-top:15%">
    <div class="modal-content" style="background:rgb(205, 203, 204)">
      <div class="modal-header">
        <img src="images/clipart/triangle.png" alt="" style="position:absolute;height:328px;left:60%;top:-224px;">
        <span style="margin-left:-58%;margin-top:20px;">

        </span>
      </div>
      <div class="modal-body">
        <div class="">
          <textarea name="name" rows="8" cols="80" placeholder="Please specify the purpose..." style="width:97%;height:140px;margin-left:10px;font-size:33px;resize:none;border:none"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" type="button" name="button" style="background:rgb(74, 165, 170);color:white;font-size:33px;">Continue</button>
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

<!-- feedback DOST-services modal -->
<div class="modal fade" id="dost-services_modal" tabindex="-1" aria-hidden="true" aria-labelledBy="DOST Services modal from the feeback function" style="font-family:monospace">
  <div class="modal-dialog modal-lg" style="margin-top:15%;">
    <div class="modal-content" style="background:rgb(205, 203, 204)">
      <div class="modal-header" style="height:12%;">
        <span style="margin-top:20px;width:250px;height:75px;position:absolute;left:20;">
          <img src="" alt="DOST services" style="width:100%">
        </span>
        <img src="images/clipart/triangle.png" alt="" style="position:absolute;width:440px;right:-16%;top:-39%;">
      </div>
      <div class="modal-body">
        <textarea name="name" rows="8" cols="80" style="resizable:false;width:100%;height:30%;font-size:37px;padding:12px;" placeholder="Please specify the purpose..."></textarea>
      </div>
      <div class="modal-footer">
        <button class="btn" style="background:rgb(74, 164, 169);font-size:30px;color:white;border-radius:18px;">Continue</button>
      </div>
    </div>
  </div>
</div>


<style media="screen">
  #feedback_preview-modal table *{
    font-size : 25px;
  }
  #feedback_preview-modal table input, #feedback_preview-modal table textarea{
    text-align: left;
    background: white;
  }
  #feedback_preview-modal table .chart-img{
    height:85px;   max-height: 75px;
    border:1px solid #ccc;
  }
  #feedback_preview-modal table .chart-img > img{
    width: 73px;
    height: 65px;
  }
</style>
<div class="modal fade" id="feedback_preview-modal" tabindex="-1" aria-hidden="true" aria-labelledby="Preview for the data user has inputted">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h1>Feedback Preview</h1>
      </div>
      <div class="modal-body">
        <table class="table" style="border-collapse: separate">
          <tr>
            <td colspan="5">
              <label class=""><i>Nature of Business</i></label>
              <input class="nob form-control" type="text" name="" value="" disabled>
            </td>
          </tr>
          <tr>
            <td colspan="5">
              <label for=""><i>Availed DOST Service</i></label>
              <textarea class="services form-control" name="name" rows="2" style="resize:none" disabled></textarea>
              <hr style="margin:5px;">
              <label for=""><i>DOST Services Comment</i></label>
              <textarea class="services_text form-control" name="name" style="resize:none" disabled></textarea>
            </td>
          </tr>
          <tr>
            <td colspan="5">
              <label for=""><i>Delivery of Services</i></label>
            </td>
          </tr>
          <tr>
            <?php foreach(range(0,4) as $i): ?>
            <td class="chart-img chart<?=$i?>"></td>
            <?php endforeach ?>
          </tr>
          <tr>
            <td colspan="5">
              <label for=""><i>Comments/Suggestions</i></label>
              <textarea class="comment form-control" name="name" rows="2" disabled></textarea>
            </td>
          </tr>
          <tr>
            <td colspan="5">
              <button class="btn btn-default pull-right btn-proceed" type="button" name="button">Proceed</button>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="orgProfile_modal" tabindex="-1" aria-hidden="true" aria-labelledBy="Organization view profile">
  <div class="modal-dialog modal-lg" style="margin-top:10%;width:40%">
    <div class="modal-content" style="background:rgb(196,196,196);min-height:20%" style="">
      <div class="modal-body" style="max-height:600px;overflow-y:auto;">
        <button type="button" class="close" data-dismiss="modal" aria-label style="opacity:1">
          <img src="images/clipart/close.png" alt="" id="orgClose">
        </button>
        <div class="profiles"></div>
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
    margin:0px -105px;
    font-size:23px;
  }
  .tech_modal .modal-body{
    padding:0px;
  }
  .tech_modal .modal-body .main-nav{
    width : 276px;
  }
  .tech_modal .modal-body .arm-nav{
    width : 25.7%;
  }

  .tech_modal .main-nav, .tech_modal .arm-nav{
    background: #e7e7e7;
    border-right: 1px solid #cfc9c9;
    height: 672px;
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
    position: absolute;
    right: 1px;
    padding: 0px;
    width:886px;
    height:672px;
  }

  .tech_modal .modal-dialog{
    width: 79%;
  }
  .tech_modal .modal-content{
    margin-top: 100px;
    height: 83.8%;
}
</style>

<div class="modal fade tech_modal techList-modal" tabindex="-2" aria-hidden="true" aria-labelledBy="Modal view for DOST Technologies">
  <div class="modal-dialog" style="min-width:1550px !important;">
    <div class="modal-content">
      <div class="modal-header" style="padding-bottom:0px;min-height:79;">
          <p style="position:absolute;left:125px;"><i class="fa fa-briefcase"></i> <span class="header-text"></span></p>
          <button class="close pull-right" type="button" name="button" data-dismiss="modal" aria-label style="right: 20px; top: 10px; position: absolute;">
            <span aria-hidden="true">&times;</span>
          </button>

        <section class="section" style="position:absolute;right:20px;top:40px;">
          <form action="" method="POST" onsubmit="event.preventDefault()" class="" style="opacity:0">
            <img class="emailDoneGif" src="images/clipart/checked.png" alt="Done Image" style="width:32px;padding:3px;display:none;background:white;border:1px solid #c9c5c5">
            <img class="emailLoadGif" src="images/clipart/load.gif" alt="loading screen" style="width:35px;display:none;">
            <input type="email" name="" value="" required="required" class="input_sendEmail form-control" placeholder="Email Address" style="width:220px; display:inline;">
            <button class="btn btn-default btn_sendEmail" type="submit" name="button">Send me a Copy.</button>
            <button class="btn btn-default btn_enlargePDF" type="button" name="button">Enlarge PDF</button>
          </form>
        </section>
      </div>
      <div class="modal-body">
        <div class="main-nav col-lg-3">
          <ul>  </ul>
        </div>
        <div class="arm-nav col-lg-3">
          <ul>  </ul>
        </div>
        <div class="col-lg-7 div-frame" style="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade tech_modal" id="enlarge_pdf" tabindex="0" aria-hidden="true" aria-label="View the PDF larger">
  <div class="modal-dialog" style="min-width:1550px !important">
    <div class="modal-content">
      <div class="modal-header" style="height:45px;">
        <span id="pdfTitle" style="position:absolute;left:19px;"></span>
        <button class="close" type="button" name="button" data-dismiss="modal" style="position:absolute;right:20px;" aria-label>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <style media="screen">
          .enlarge_pdf .div-frame iframe{
            height:703px;
          }
        </style>
        <div class="div-frame" style="width:100%;">


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
        <button class="close" type="button" name="button" data-dismiss="modal" style="position:absolute;right:20px;" aria-label>
          <span aria-hidden="true">&times;</span>
        </button>
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

<div class="modal fade" id="loadGif-modal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-body">
        <img src="images/clipart/load.gif" alt="">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="announcements" tabindex="-1" aria-hidden="true" aria-labelledby="For announcements">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" name="button" data-dismiss="modal" style="position:absolute;right:20px;" aria-label>
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 class="modal-title">Announcements</h2>
      </div>
      <div class="modal-body" style="height:650px;text-align:center;overflow-y:auto;">

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="viewLinks" tabindex="-1" aria-hidden="true" aria-labelledby="For viewing external links">
  <div class="modal-dialog modal-lg" style="min-width:1550px !important">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title"></h2>
        <button class="close" type="button" name="button" data-dismiss="modal" style="position:absolute;right:20px;" aria-label>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:0px;">
        <iframe src="" width="" height=""></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="alerts" tabindex="-1" aria-hidden="true" aria-labelledBy="For messages">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body" style="text-align:center">

      </div>
      <div class="modal-footer">
        <button class="btn btn-default" type="button" name="button" onclick="closeAlert()">Continue</button>
      </div>
    </div>
  </div>
</div>
