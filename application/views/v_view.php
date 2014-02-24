<!--/span-->
        <div class="span9" id="content">
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
                             <form class="form-horizontal" method="post" action="<?php echo site_url('add/process'); ?>">
                                <legend>
                                    Scheduling
                                    <input class="relay-checkbox switch-small" type="checkbox">
                                </legend>
                                <div class="control-group">
                                  <label class="control-label">ON Period</label>
                                  <div class="controls">
                                    <input name="on-period" class="input-xlarge focused" type="text">
                                  </div>
                                </div>
                                <div class="control-group">
                                  <label class="control-label">OFF Period</label>
                                  <div class="controls">
                                    <input name="off-period" class="input-xlarge focused" type="text">
                                  </div>
                                </div>
                                
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