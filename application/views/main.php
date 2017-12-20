<div class="container">
  <header class="margin20 no-margin-left no-margin-right">
    <div class="clear-float">
      <div class="place-right">
        <form>
          <div class="input-control text margin20" style="width: 300px">
            <input type="text" name="q" placeholder="Cari...">
            <button class="button"><span class="mif-search"></span></button>
          </div>
        </form>
      </div>
      <a class="place-left fg-black padding10" href="#" title="">
        <h1 class="">Bandung AutoBus</h1>
      </a>
    </div>

    <!-- main menu -->
    <ul class="m-menu bg-grayDark">
      <li class="bg-grayDark fg-white"><a href="#">Hari ini</a></li>
      <li class="bg-grayDark fg-white"><a href="#">Besok</a></li>
      <li class="bg-grayDark fg-white"><a href="#">Lusa</a></li>

      <li class="place-right bg-grayDark fg-white">
        <a href="#" class="dropdown-toggle">Lokasi</a>
        <ul class="d-menu place-right bg-grayDark fg-white bg-hover-white fg-hover-grayDark" data-role="dropdown">
          <li class="bg-grayDark fg-white bg-hover-white fg-hover-grayDark"><a href="#">Asal</a></li>
          <li class="bg-grayDark fg-white bg-hover-white fg-hover-grayDark"><a href="#">Tujuan</a></li>
        </ul>
      </li>

      <li class="bg-grayDark fg-white">
        <a href="#" class="dropdown-toggle">Overview</a>
        <div class="m-menu-container" data-role="dropdown" data-no-close="true">
          <div class="grid no-margin">
            <div class="row cells5">
              <div class="cell padding10">
                <img src="images/me.jpg">
              </div>
              <div class="cell colspan2">
                <h2 class="fg-white text-bold text-shadow">Metro UI CSS 3.0</h2>
                <p class="padding20 no-padding-top no-padding-left no-padding-bottom fg-white">
                  Metro UI CSS a set of styles to create a site with an interface similar to Windows 8.
                </p>
                <p class="fg-white text-bold">
                  Sergey Pimenov
                </p>
              </div>
              <div class="cell colspan2">
                <ul class="unstyled-list">
                  <li>
                    <h3 class="text-shadow">Begin with Metro UI CSS</h3></li>
                  <li><a class="fg-white" href="#">Requirements</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>

  </header>

  <div class="main-content clear-float">
    <div class="tile-area no-padding">
      <div class="tile-group no-margin no-padding" style="width: 100%">

        <div class="tile-big tile-wide-y tile-super-x bg-white">
          <div class="tile-content">
            <div class="panel" style="height: 100%">
              <div class="heading bg-black fg-white"><span class="title text-light">Cari tiket cepat</span></div>
              <div class="content fg-dark clear-float padding10" style="height: 100%">
                <form class="margin10 no-margin-left no-margin-right">
                  <div class="input-control select" style="width: 35%;">
                    <label>Asal</label>
                    <select class="select2">
                      <?php foreach ($village as $key => $value) { ?>
                        <option value="<?php echo $value->village_id; ?>">
                          <?php echo $value->village_name; ?>
                        </option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="input-control select" style="width: 35%;">
                    <label>Tujuan</label>
                    <select class="select2">
                      <?php foreach ($village as $key => $value) { ?>
                        <option value="<?php echo $value->village_id; ?>">
                          <?php echo $value->village_name; ?>
                        </option>
                        <?php } ?>
                    </select>
                  </div>
                  <button type="button" class="button bg-darkRed bg-active-grayDark fg-white">Cari tiket</button>
                </form>
                <p>
                  Dengan saran dan prasarana transportasi yang memadai (cepat, tepat, aman, dan hemat) diharapkan dapat menjadi solusi kemacetan yang selama ini dirasakan oleh warga Indonesia, khususnya Bandung!
                </p>
              </div>
            </div>
          </div>
        </div>


        <div class="tile bg-dark fg-white" data-role="tile">
          <div class="tile-content iconic">
            <span class="icon mif-windows"></span>
          </div>
        </div>
        <div class="tile bg-white fg-darkRed" data-role="tile">
          <div class="tile-content iconic">
            <span class="icon mif-bus"></span>
          </div>
        </div>
        <div class="tile bg-white fg-dark" data-role="tile">
          <div class="tile-content iconic">
            <span class="icon mif-users"></span>
          </div>
        </div>
        <div class="tile bg-darkRed fg-white" data-role="tile">
          <div class="tile-content iconic">
            <span class="icon mif-registered"></span>
          </div>
        </div>

        <a href="<?php echo base_url('/about/'); ?>">
          <div class="tile-big tile-wide-y bg-white" data-role="tile">
            <div class="tile-content">
              <div class="panel" style="height: 100%">
                <div class="heading bg-black fg-white"><span class="title text-light">Tentang BAB (Bandung AutoBus)</span></div>
                <div class="content fg-dark clear-float" style="height: 100%">
                  <img src="../images/jeki_chan.jpg" class="place-left margin10" style="height: 230px">
                  <h2 class="text-light">Om-Chan</h2>
                  <p>
                    Nanti ngetiknya ya!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </a>


        <div class="tile-big ol-transparent" data-role="tile">
          <div class="tile-content">
            <div class="carousel square-markers" data-role="carousel" data-height="100%" data-width="100%" data-controls="false">
              <div class="slide">
                <img src="<?php echo base_url('/files/images/gallery/gallery-1.jpg') ?>" data-role="fitImage" data-format="fill">
              </div>
              <div class="slide">
                <img src="<?php echo base_url('/files/images/gallery/gallery-2.jpg') ?>" data-role="fitImage" data-format="fill">
              </div>
              <div class="slide">
                <img src="<?php echo base_url('/files/images/gallery/gallery-3.jpg') ?>" data-role="fitImage" data-format="fill">
              </div>
            </div>
          </div>
        </div>


      </div>
      <!-- End first group -->

    </div>
  </div>
  <!-- End of tiles -->
</div>
