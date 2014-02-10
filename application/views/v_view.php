<!--/span-->
        <div class="span9" id="content">
            <div class="row-fluid">
                <div class="span12">
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Device Address <?php echo $id;?></div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span3">
                                <div class="chart chart-relay" data-percent="0">
                                    <span class="status-relay">OFF</span>
                                </div>
                                <div class="chart-bottom-heading">
                                    <span class="label label-info"><?php echo $id;?></span><br><br>
                                    <input address="<?php echo $id;?>" class="relay-checkbox switch-small" type="checkbox" data-on="success" data-off="warning">
                                </div>
                            </div>
                            <div class="span9" id="hero-area" style="height: 200px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>