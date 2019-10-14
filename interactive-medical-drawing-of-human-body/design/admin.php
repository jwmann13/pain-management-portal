<?php $anatomy = $this->options; ?>
<form method="post" action="<?php echo admin_url( '/' ); ?>admin.php?page=anatomy">
<div id="anatomy-admin">
  <div id="anatomy-header">
    <p class="anatomy-shortcode">Insert this shortcode <input type="text" value="[anatomy]" readonly> into any page or post to display the interactive drawing.</p>
    <p class="anatomy-btns"><span class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></span></p>
  </div>
  <div id="anatomy-page">
    <div class="anatomy-col-lt">
      <div id="anatomy-preview">
        <?php include 'anatomy.php'; ?>
      </div>
      <div class="anatomy-settings">
        <div class="box-header individ-i">Settings</div>
        <div class="box-body">

          <div class="area"><p class="area-name">HEAD</p>
            <span class="chkbx"><input type="checkbox" name="enbl_1" value="1" <?php if ($anatomy['enbl_1'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_1" value="<?php echo $anatomy['url_1']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_1">
                    <option value="_self" <?php if($anatomy['turl_1'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_1'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_1'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_1"><?php echo $anatomy['info_1']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">NECK</p>
            <span class="chkbx"><input type="checkbox" name="enbl_2" value="1" <?php if ($anatomy['enbl_2'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_2" value="<?php echo $anatomy['url_2']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_2">
                    <option value="_self" <?php if($anatomy['turl_2'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_2'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_2'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_2"><?php echo $anatomy['info_2']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">CHEST</p>
            <span class="chkbx"><input type="checkbox" name="enbl_3" value="1" <?php if ($anatomy['enbl_3'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_3" value="<?php echo $anatomy['url_3']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_3">
                    <option value="_self" <?php if($anatomy['turl_3'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_3'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_3'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_3"><?php echo $anatomy['info_3']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">ABDOMEN</p>
            <span class="chkbx"><input type="checkbox" name="enbl_4" value="1" <?php if ($anatomy['enbl_4'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_4" value="<?php echo $anatomy['url_4']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_4">
                    <option value="_self" <?php if($anatomy['turl_4'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_4'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_4'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_4"><?php echo $anatomy['info_4']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">PELVIS</p>
            <span class="chkbx"><input type="checkbox" name="enbl_5" value="1" <?php if ($anatomy['enbl_5'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_5" value="<?php echo $anatomy['url_5']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_5">
                    <option value="_self" <?php if($anatomy['turl_5'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_5'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_5'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_5"><?php echo $anatomy['info_5']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">PUBIS</p>
            <span class="chkbx"><input type="checkbox" name="enbl_6" value="1" <?php if ($anatomy['enbl_6'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_6" value="<?php echo $anatomy['url_6']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_6">
                    <option value="_self" <?php if($anatomy['turl_6'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_6'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_6'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_6"><?php echo $anatomy['info_6']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">SHOULDER [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_7" value="1" <?php if ($anatomy['enbl_7'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_7" value="<?php echo $anatomy['url_7']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_7">
                    <option value="_self" <?php if($anatomy['turl_7'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_7'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_7'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_7"><?php echo $anatomy['info_7']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">SHOULDER [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_8" value="1" <?php if ($anatomy['enbl_8'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_8" value="<?php echo $anatomy['url_8']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_8">
                    <option value="_self" <?php if($anatomy['turl_8'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_8'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_8'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_8"><?php echo $anatomy['info_8']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">ARM [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_9" value="1" <?php if ($anatomy['enbl_9'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_9" value="<?php echo $anatomy['url_9']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_9">
                    <option value="_self" <?php if($anatomy['turl_9'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_9'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_9'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_9"><?php echo $anatomy['info_9']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">ARM [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_10" value="1" <?php if ($anatomy['enbl_10'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_10" value="<?php echo $anatomy['url_10']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_10">
                    <option value="_self" <?php if($anatomy['turl_10'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_10'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_10'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_10"><?php echo $anatomy['info_10']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">ELBOW [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_11" value="1" <?php if ($anatomy['enbl_11'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_11" value="<?php echo $anatomy['url_11']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_11">
                    <option value="_self" <?php if($anatomy['turl_11'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_11'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_11'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_11"><?php echo $anatomy['info_11']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">ELBOW [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_12" value="1" <?php if ($anatomy['enbl_12'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_12" value="<?php echo $anatomy['url_12']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_12">
                    <option value="_self" <?php if($anatomy['turl_12'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_12'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_12'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_12"><?php echo $anatomy['info_12']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">FOREARM [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_13" value="1" <?php if ($anatomy['enbl_13'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_13" value="<?php echo $anatomy['url_13']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_13">
                    <option value="_self" <?php if($anatomy['turl_13'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_13'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_13'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_13"><?php echo $anatomy['info_13']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">FOREARM [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_14" value="1" <?php if ($anatomy['enbl_14'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_14" value="<?php echo $anatomy['url_14']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_14">
                    <option value="_self" <?php if($anatomy['turl_14'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_14'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_14'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_14"><?php echo $anatomy['info_14']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">WRIST [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_15" value="1" <?php if ($anatomy['enbl_15'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_15" value="<?php echo $anatomy['url_15']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_15">
                    <option value="_self" <?php if($anatomy['turl_15'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_15'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_15'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_15"><?php echo $anatomy['info_15']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">WRIST [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_16" value="1" <?php if ($anatomy['enbl_16'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_16" value="<?php echo $anatomy['url_16']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_16">
                    <option value="_self" <?php if($anatomy['turl_16'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_16'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_16'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_16"><?php echo $anatomy['info_16']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">HAND [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_17" value="1" <?php if ($anatomy['enbl_17'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_17" value="<?php echo $anatomy['url_17']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_17">
                    <option value="_self" <?php if($anatomy['turl_17'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_17'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_17'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_17"><?php echo $anatomy['info_17']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">HAND [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_18" value="1" <?php if ($anatomy['enbl_18'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_18" value="<?php echo $anatomy['url_18']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_18">
                    <option value="_self" <?php if($anatomy['turl_18'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_18'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_18'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_18"><?php echo $anatomy['info_18']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">THIGH [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_19" value="1" <?php if ($anatomy['enbl_19'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_19" value="<?php echo $anatomy['url_19']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_19">
                    <option value="_self" <?php if($anatomy['turl_19'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_19'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_19'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_19"><?php echo $anatomy['info_19']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">THIGH [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_20" value="1" <?php if ($anatomy['enbl_20'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_20" value="<?php echo $anatomy['url_20']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_20">
                    <option value="_self" <?php if($anatomy['turl_20'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_20'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_20'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_20"><?php echo $anatomy['info_20']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">KNEE [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_21" value="1" <?php if ($anatomy['enbl_21'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_21" value="<?php echo $anatomy['url_21']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_21">
                    <option value="_self" <?php if($anatomy['turl_21'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_21'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_21'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_21"><?php echo $anatomy['info_21']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">KNEE [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_22" value="1" <?php if ($anatomy['enbl_22'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_22" value="<?php echo $anatomy['url_22']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_22">
                    <option value="_self" <?php if($anatomy['turl_22'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_22'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_22'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_22"><?php echo $anatomy['info_22']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">LEG [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_23" value="1" <?php if ($anatomy['enbl_23'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_23" value="<?php echo $anatomy['url_23']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_23">
                    <option value="_self" <?php if($anatomy['turl_23'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_23'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_23'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_23"><?php echo $anatomy['info_23']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">LEG [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_24" value="1" <?php if ($anatomy['enbl_24'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_24" value="<?php echo $anatomy['url_24']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_24">
                    <option value="_self" <?php if($anatomy['turl_24'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_24'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_24'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_24"><?php echo $anatomy['info_24']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">ANKLE [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_25" value="1" <?php if ($anatomy['enbl_25'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_25" value="<?php echo $anatomy['url_25']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_25">
                    <option value="_self" <?php if($anatomy['turl_25'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_25'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_25'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_25"><?php echo $anatomy['info_25']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">ANKLE [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_26" value="1" <?php if ($anatomy['enbl_26'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_26" value="<?php echo $anatomy['url_26']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_26">
                    <option value="_self" <?php if($anatomy['turl_26'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_26'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_26'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_26"><?php echo $anatomy['info_26']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">FOOT [Right]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_27" value="1" <?php if ($anatomy['enbl_27'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_27" value="<?php echo $anatomy['url_27']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_27">
                    <option value="_self" <?php if($anatomy['turl_27'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_27'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_27'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_27"><?php echo $anatomy['info_27']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">FOOT [Left]</p>
            <span class="chkbx"><input type="checkbox" name="enbl_28" value="1" <?php if ($anatomy['enbl_28'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_28" value="<?php echo $anatomy['url_28']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_28">
                    <option value="_self" <?php if($anatomy['turl_28'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($anatomy['turl_28'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($anatomy['turl_28'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_28"><?php echo $anatomy['info_28']; ?></textarea></p></div>
            </div>
          </div>

        </div><!-- box-body / for areas -->
      </div><!-- anatomy-settings / for areas -->
    </div><!-- anatomy-col-lt -->

    <!-- General anatomy Colors -->
    <div class="anatomy-col-rt">
      <div class="anatomy-settings">
        <div class="box-header shape-icon">General Settings</div>
        <div class="box-body">
          <div class="general-box"><span class="general-set i-border">Outline Color</span><input type="text" name="borderclr" value="<?php echo $anatomy['borderclr']; ?>" class="color-field" /></div>
        </div><!-- box-body -->
      </div><!-- anatomy-settings -->
      <p><strong>Hint:</strong> you can hide the outline by setting its value as <strong><i>transparent</i></strong>.</p>
    </div><!-- anatomy-col-rt -->

    <input type="hidden" name="anatomy">
      <?php
      settings_fields(__FILE__);
      do_settings_sections(__FILE__);
      ?>
    <p class="anatomy-btns"><span class="submit"><input type="submit" name="restore_default" id="submit" class="button" value="Restore Default"></span></p>
    <div class="scroll-top"><span class="scroll-top-icon"></span></div>
    <!--scroll-top script-->
    <script>
      jQuery(function(){jQuery(document).on( 'scroll', function(){ if (jQuery(window).scrollTop() > 100) {jQuery('.scroll-top').addClass('show');} else {jQuery('.scroll-top').removeClass('show');}});jQuery('.scroll-top').on('click', scrollToTop);});function scrollToTop() {verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;element = jQuery('body');offset = element.offset();offsetTop = offset.top -32;jQuery('html, body').animate({scrollTop: offsetTop}, 500, 'linear');}
    </script>

  </div><!-- anatomy-page -->
</div><!-- anatomy-admin -->
</form>
