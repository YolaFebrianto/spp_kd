<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="<?php site_url('student') ?>" target="_blank">
      <?php if (!empty(logo())) { ?>
      <img src="<?php echo upload_url('school/' . logo()) ?>" class="navbar-brand-img h-100" alt="main_logo">
      <?php } else { ?>
      <img src="<?php echo media_url('argon/img/logo.svg') ?>" class="navbar-brand-img h-100" alt="main_logo">
      <?php } ?>
      <?php if (!empty(logo())) { ?>
      <!-- logo for regular state and mobile devices -->
      <span class="ms-1 font-weight-bold"><b>&nbsp;<?php echo $this->config->item('app_name') ?></b></span>
      <?php } else { ?>
      <span class="ms-1 font-weight-bold"><b>&nbsp;<?php echo $this->config->item('app_name') ?></b></span>
      <?php } ?>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('student/profile') ?>">
          <div class="d-flex px-2 py-1">
            <div>
              <?php if ($this->session->userdata('student_img') != null) { ?>
              <img src="<?php echo upload_url().'/student/'.$this->session->userdata('student_img'); ?>" class="avatar avatar-sm me-3" alt="user1">
              <?php } else { ?>
              <img src="<?php echo media_url('argon/img/user.png') ?>" class="avatar avatar-sm me-3" alt="user1">
              <?php } ?>
            </div>
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-sm"><?php echo ucfirst($this->session->userdata('ufullname_student')); ?></h6>
              <p class="text-xs text-secondary mb-0"><span class="badge badge-sm bg-gradient-success">Online</span></p>
            </div>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($this->uri->segment(2) == 'dashboard' OR $this->uri->segment(2) == NULL) ? 'active' : '' ?>" href="<?php echo site_url('student'); ?>">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-th text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
    </ul>
  </div>
</aside>