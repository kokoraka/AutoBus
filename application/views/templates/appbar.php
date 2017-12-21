<div class="container-fluid">

  <div class="app-bar bg-black darcula">
    <a class="app-bar-element">
      <span id="toggle-tiles-dropdown" class="mif-apps mif-2x"></span>
      <div class="app-bar-drop-container" data-role="dropdown" data-toggle-element="#toggle-tiles-dropdown" data-no-close="false" style="width: 324px;">
        <div class="tile-container bg-white">
          <div class="tile-small bg-cyan">
            <div class="tile-content iconic">
              <span class="icon mif-onedrive"></span>
            </div>
          </div>
          <div class="tile-small bg-yellow">
            <div class="tile-content iconic">
              <span class="icon mif-google"></span>
            </div>
          </div>
          <div class="tile-small bg-red">
            <div class="tile-content iconic">
              <span class="icon mif-facebook"></span>
            </div>
          </div>
          <div class="tile-small bg-green">
            <div class="tile-content iconic">
              <span class="icon mif-twitter"></span>
            </div>
          </div>
        </div>
      </div>
    </a>

    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
      <li><a href="<?php echo base_url('/'); ?>">Beranda</a></li>
      <li><a href="<?php echo base_url('/about/'); ?>">Tentang</a></li>
    </ul>
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
            <label class="input-control checkbox small-check">
              <input type="checkbox">
              <span class="check"></span>
              <span class="caption">Remember me</span>
            </label>
            <div class="form-actions">
              <button class="button bg-darkRed fg-white">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
