    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">0</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

       
         
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">No notifications</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-cogs"></i>
            <span class="badge badge-danger navbar-badge">0</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">All Settings</span>
            <div class="dropdown-divider"></div>
            <a href="edit-profile" class="dropdown-item">
              <i class="fas fa-signature mr-2"></i><?php echo $servedby_name." (".$servedby_role.")";?>
              <span class="float-right text-muted text-sm"> </span>  
            </a>
            <div class="dropdown-divider"></div>
            <a href="edit-profile" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i><?php echo $servedby_id;?>
              <span class="float-right text-muted text-sm"> </span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="edit-profile" class="dropdown-item">
              <i class="fas fa-user mr-2"></i>My Profile
              <span class="float-right text-muted text-sm"> </span>
            </a>
            <div class="dropdown-divider"></div>

            <a href="edit-password" class="dropdown-item">
              <i class="fas fa-key mr-2"></i>Change Password
              <span class="float-right text-muted text-sm"> </span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="index?log_out" class="dropdown-item">
              <i class="fas fa-sign-out-alt"></i> Sign Out
              <span class="float-right text-muted text-sm"> </span>
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
      </ul>
    </nav>

