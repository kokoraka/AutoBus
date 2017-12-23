<div class="container-fluid">

  <div class="app-bar bg-black darcula">
    <a class="app-bar-element branding" href="<?php echo base_url('/'); ?>">
      AutoBus
      <span class="mif-apps mif-2x"></span>
    </a>

    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
      <li><a href="<?php echo base_url('/dashboard/'); ?>">Beranda</a></li>
      <li><a href="<?php echo base_url('/about/'); ?>">Tentang</a></li>
    </ul>
    <?php if ($logged_in === FALSE) { ?>
    <div class="app-bar-element place-right">
      <a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Login</a>
      <div class="app-bar-drop-container bg-white fg-dark place-right" data-role="dropdown" data-no-close="true">
        <div class="padding20">
          <form>
            <h4 class="text-light">Login</h4>
            <div class="input-control text">
              <span class="mif-user prepend-icon"></span>
              <input type="text" placeholder="Username">
            </div>
            <div class="input-control text">
              <span class="mif-lock prepend-icon"></span>
              <input type="password" placeholder="Password">
            </div>
            <div class="form-actions">
              <button class="button bg-darkRed fg-white">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php } else { ?>
      <div class="app-bar-element place-right">
        <a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Profil</a>
        <div class="app-bar-drop-container bg-white fg-dark place-right" data-role="dropdown" data-no-close="true">
          <div class="padding20">
            <a class="fg-black" href="<?php echo base_url('/logout/'); ?>">Keluar</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

</div>
