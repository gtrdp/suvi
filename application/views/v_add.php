<div class="span9" id="content">
	<?php if($notif):?>
    <div class="alert alert-block alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php echo $notif;?>
    </div>
    <?php endif; ?>
	        <!-- morris stacked chart -->
	        <div class="row-fluid">
	            <!-- block -->
	            <div class="block">
	                <div class="navbar navbar-inner block-header">
	                    <div class="muted pull-left"><?php echo $type; ?> Plugwise Device</div>
	                </div>
	                <div class="block-content collapse in">
	                    <div class="span12">
	                         <form class="form-horizontal" method="post" action="<?php echo $action; ?>">
	                            <legend>Device Information</legend>
	                            <div class="control-group">
	                              <label class="control-label">Address</label>
	                              <div class="controls">
	                                <input name="address" class="input-xlarge focused" type="text" value="<?php if(isset($device)) echo $device->address; ?>" <?php echo $disabled; ?>>
	                              </div>
	                            </div>
	                            <div class="control-group">
	                              <label class="control-label">Description</label>
	                              <div class="controls">
	                                <textarea class="input-xlarge focused" name="description" rows="5"><?php if(isset($device)) echo $device->description; ?></textarea>
	                              </div>
	                            </div>
	                            <div class="control-group">
	                              <label class="control-label">Image Thumbnail</label>
	                              <div class="controls">
	                                <input name="img" class="input-xlarge focused" type="file">
	                              </div>
	                            </div>

	                            <?php if($disabled == 'disabled'): ?>
	                            	<input type="hidden" name="address" value="<?php if(isset($device)) echo $device->address; ?>">
	                        	<?php endif;?>
	                            
	                            <div class="form-actions">
	                              <button type="submit" class="btn btn-primary"><?php echo $button;?></button>
	                              <button type="reset" class="btn">Cancel</button>
	                            </div>
	                         </form>
	                    </div>
	                </div>
	            </div>
	            <!-- /block -->
	        </div>
	    </div>
    </div>
    <hr>