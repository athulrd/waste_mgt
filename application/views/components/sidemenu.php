<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('menu/add_location'); ?>"><i class="fa fa-circle-o"></i> Add Location</a></li>
            <li>
              <a href="<?php echo site_url('menu/add_new_bin'); ?>"><i class="fa fa-circle-o"></i> Add New Bin</a></li>
            <li>
              <a href="<?php echo site_url('menu/add_new_member'); ?>"><i class="fa fa-circle-o"></i> Add New Member</a>
            </li>
            <li>
              <a href="<?php echo site_url('menu/bin_status'); ?>"><i class="fa fa-circle-o"></i>Bin Status</a>
            </li>
            <li>
            <a href="<?php echo site_url('menu/assign_bin_member'); ?>"><i class="fa fa-circle-o"></i>Assign Bin Member</a>
            </li>
             <li>
            <a href="<?php echo site_url('menu/trial'); ?>"><i class="fa fa-circle-o"></i>trial</a>
            </li>
            <li>
              <a href="<?php echo site_url('menu/view_members'); ?>"><i class="fa fa-circle-o"></i>View Members</a>
            </li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>