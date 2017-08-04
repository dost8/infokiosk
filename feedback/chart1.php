<div class="item active" style="height:100%;background-image:url('images/Clipart/Box.png');background-size:cover;padding:65px;color:white">
  <table>
    <tr>
      <td style="border-right:2px solid white">
        <table style="font-size:25px;color:white;font-family:monospace;">
          <tr>
            <td colspan="4" style="font-family:monospace;font-weight:bolder;">Nature of Businesss (Choose One)</td>
          </tr>
          <?php $list = ['Food','Plastic/Rubber','Agriculture','Handicraft/Holiday Decors','Construction','Metals & Engineering','Furniture','Government','Beverage','Chemicals/Patrochemicals','Trading','Pharmaceuticals','Mining','Academe','Transport','Others'];

            echo "<tr>";
            for($i = 1; $i <= count($list); $i++){
                echo '<td class="left-td rdo">
                  <label class="btn btn-default feedback_radio">
                    <input type="radio" name="businessType" class=" radio-warning radio'.$i.'">
                    <span class="glyphicon glyphicon-ok"></span>
                  </label>
                </td>';
                echo '<td class="left-td text">'.$list[$i - 1].'</td>';

              if(($i % 2) == 0){
                echo "</tr><tr>";
              }
            }
            echo '</tr>';
           ?>
           <tr><td></td></tr>
        </table>
        </td>

        <td style="padding-left:45px;">
          <div class="right_div" style="margin-top:-30px;">
            <h3 style="color:white;font-family:monospace;font-weight:bolder">Service availed from DOST <br>(Please check and include details):</h3>
            <?php
            $list = ['setup','packaging','training','undergrad','datbed','finance'];
            foreach ($list as $key => $value):
           ?>
            <div class="image_link" data-image="<?=$value?>">
              <img src="images/clipart/<?=$value?>.png" alt="">
            </div>
            <?php endforeach ?>
          </div>
        </td>
    </tr>
  </table>
</div>

<script>
