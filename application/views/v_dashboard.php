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
                        <div class="muted pull-left">Device List</div>
                        <div class="pull-right">
                          <a href="<?php echo site_url('add'); ?>">
                            <span class="badge badge-success">Add Device</span>
                          </a>
                        </div>
                    </div>
                    <div class="block-content collapse in">
                        <ul class="thumbnails">
                          <?php if($device->num_rows() > 0): ?>
                            <?php $i = 0; foreach($device->result() as $row): ?>

                              <?php if($i > 2 && ($i % 3) == 0) echo '</ul><ul class="thumbnails">'; ?>

                              <li class="span4">
                                <div class="thumbnail">
                                  <img alt="300x200" style="width: 300px; height: 200px;" src="<?php echo site_url('images') . '/' . $row->img; ?>">
                                  <div class="caption">
                                    <h3><?php echo $row->address ?></h3>
                                    <p><?php echo $row->description ?></p>
                                    <p>
                                      <a href="<?php echo site_url('dashboard/view/2'.$row->address); ?>" class="btn btn-success">View</a>
                                      <a href="<?php echo site_url('add/edit/2'.$row->address); ?>" class="btn btn-warning">Edit</a>
                                      <a onclick="deleteDevice('<?php echo $row->address; ?>')" class="btn btn-danger">Delete</a>
                                    </p>
                                  </div>
                                </div>
                              </li>
                              <?php $i++; ?>
                            <?php endforeach; ?>
                          <?php else: ?>
                            <p>No device registered. Please add new plugwise device.</p>
                          <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
      function deleteDevice (address) {
        if (confirm('Are you sure you want to delete this '+address+' device?')) {
          window.location='<?php echo site_url("dashboard/delete"); ?>/' + address;
        } else{

        }
      }
    </script>
</div>
<hr>
