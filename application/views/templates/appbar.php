<div class="container-fluid">

  <div class="app-bar bg-black darcula">
    <a class="app-bar-element branding" href="<?php echo base_url('/'); ?>">
      AutoBus
      <span class="mif-apps mif-2x"></span>
    </a>

    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
      <li class="bg-hover-white fg-hover-black"><a class="fg-hover-white" href="<?php echo base_url('/dashboard/'); ?>">Beranda</a></li>
      <?php if ($logged_in === FALSE) { ?>
      <li class="bg-hover-white fg-hover-black"><a class="fg-hover-white" href="<?php echo base_url('/register/'); ?>">Daftar</a></li>
      <?php } ?>
      <li class="bg-hover-white fg-hover-black"><a class="fg-hover-white" href="<?php echo base_url('/about/'); ?>">Tentang</a></li>
    </ul>
    <?php if ($logged_in === FALSE) { ?>
    <div class="app-bar-element place-right">
      <a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Masuk</a>
      <div class="app-bar-drop-container bg-white fg-dark place-right" data-role="dropdown" data-no-close="true">
        <div class="padding20">
          <?php echo form_open('login'); ?>
            <h4 class="text-light">Masuk</h4>
            <div class="input-control text">
              <span class="mif-user prepend-icon"></span>
              <input type="text" name="username" placeholder="Username">
            </div>
            <div class="input-control text">
              <span class="mif-lock prepend-icon"></span>
              <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-actions">
              <button class="button bg-darkRed fg-white">Masuk</button>
            </div>
          <?php echo form_close(); ?>
        </div>

        <div class="row cells1">
          <div class="cell ribbed-gray fg-white padding10">
            <h5 class="align-center">Informasi login</h5>
            <hr class="bg-white" />
            Super User<br />
            toor:root<br />
            <hr class="bg-white" />
            Normal User<br />
            alif:alif<br />
            raka:raka
          </div>
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
