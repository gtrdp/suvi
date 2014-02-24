<!--/span-->
        <div class="span9" id="content">
            <?php if($notif):?>
            <div class="alert alert-block alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $notif;?>
            </div>
            <?php endif; ?>
            <div class="row-fluid">
                <div class="span12">
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Device Address <?php echo $address;?></div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span3">
                                <div class="chart chart-relay" data-percent="<?php echo $data_percent; ?>">
                                    <span class="status-relay"><?php echo $status_relay; ?></span>
                                </div>
                                <div class="chart-bottom-heading">
                                    <span class="label label-info"><?php echo $address;?></span><br><br>
                                    <input address="<?php echo $address;?>" id="switch-on-off" class="relay-checkbox switch-small" type="checkbox" data-on="success" data-off="warning" <?php echo $checked; ?>>
                                </div>
                            </div>
                            <div class="span9" id="hero-area" style="height: 200px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Device Scheduling</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                             <form class="form-horizontal" method="post" action="<?php echo site_url('dashboard/schedule_process'); ?>">
                                <legend>
                                    Scheduling
                                    <!--<input class="relay-checkbox switch-small" type="checkbox">-->
                                </legend>
                                <div class="control-group">
                                  <label class="control-label">ON Period</label>
                                  <div class="controls">
                                    <input name="schedule_on" class="input-xlarge focused" type="text" value="<?php echo $schedule_on; ?>">
                                    minute(s)
                                  </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label">OFF Period</label>
                                  <div class="controls">
                                    <input name="schedule_off" class="input-xlarge focused" type="text" value="<?php echo $schedule_off; ?>">
                                    minute(s)
                                  </div>
                                </div>

                                <input name="address" type="hidden" value="<?php echo $address; ?>">
                                
                                <div class="form-actions">
                                  <button type="submit" class="btn btn-primary">Set</button>
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