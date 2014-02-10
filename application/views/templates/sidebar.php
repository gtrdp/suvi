<div class="container-fluid">
<div class="row-fluid">

<div class="span3" id="sidebar">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li <?php if($page == 'dashboard') echo 'class="active"';?>>
            <a href="<?php echo site_url('dashboard'); ?>"><i class="icon-chevron-right"></i> Dashboard</a>
        </li>
        <li <?php if($page == 'add') echo 'class="active"';?>>
            <a href="<?php echo site_url('add'); ?>"><i class="icon-chevron-right"></i> Add Plugwise</a>
        </li>
        <li <?php if($page == 'about') echo 'class="active"';?>>
            <a href="<?php echo site_url('about'); ?>"><i class="icon-chevron-right"></i> About</a>
        </li>
        <li>
            <a href="<?php echo site_url('login/logout');?>"><i class="icon-chevron-right"></i> Log out</a>
        </li>
    </ul>
</div>