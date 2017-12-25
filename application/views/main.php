<div class="container">
  <header class="margin20 no-margin-left no-margin-right">
    <div class="clear-float">
      <a class="place-left fg-black padding10 no-padding-top" href="#" title="">
        <h1 class="">Bandung AutoBus</h1>
      </a>
    </div>

    <!-- main menu -->
    <ul class="m-menu bg-grayDark">
      <li class="bg-grayDark fg-white"><a href="<?php echo base_url('/ticket/#today') ?>">Hari ini</a></li>
      <li class="bg-grayDark fg-white"><a href="<?php echo base_url('/ticket/#tomorrow') ?>">Besok</a></li>

      <li class="place-right bg-grayDark fg-white">
        <a href="#" class="dropdown-toggle">Lokasi</a>
        <ul class="d-menu place-right bg-grayDark fg-white bg-hover-white fg-hover-grayDark" data-role="dropdown">
          <li class="bg-grayDark fg-white bg-hover-white fg-hover-black"><a class="bg-hover-white fg-hover-black" href="<?php echo base_url('/ticket/') ?>">Asal</a></li>
          <li class="bg-grayDark fg-white bg-hover-white fg-hover-black"><a class="bg-hover-white fg-hover-black" href="<?php echo base_url('/ticket/') ?>">Tujuan</a></li>
        </ul>
      </li>

    </ul>

  </header>

  <div class="main-content clear-float">
    <div class="tile-area no-padding">
      <div class="tile-group no-margin no-padding" style="width: 100%">

        <a href="<?php echo base_url('/ticket/') ?>">
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
        </a>

        <a href="<?php echo base_url('/dashboard/') ?>">
        <div class="tile bg-dark fg-white" data-role="tile">
          <div class="tile-content iconic">
            <span class="icon mif-windows"></span>
          </div>
        </div>
        </a>

        <a href="<?php echo base_url('/dashboard/') ?>">
        <div class="tile bg-white fg-darkRed" data-role="tile">
          <div class="tile-content iconic">
            <span class="icon mif-bus"></span>
          </div>
        </div>
        </a>

        <a href="<?php echo base_url('/dashboard/') ?>">
        <div class="tile bg-white fg-dark" data-role="tile">
          <div class="tile-content iconic">
            <span class="icon mif-users"></span>
          </div>
        </div>
        </a>

        <a href="<?php echo base_url('/dashboard/') ?>">
        <div class="tile bg-darkRed fg-white" data-role="tile">
          <div class="tile-content iconic">
            <span class="icon mif-registered"></span>
          </div>
        </div>
        </a>

      </div>
      <!-- End first group -->

    </div>
  </div>
  <!-- End of tiles -->

  <div class="grid">
    <div class="row cells2">
      <div class="cell">

        <div class="listview-outlook padding10" data-role="listview">

          <div class="list-group">
            <span class="list-group-toggle">Semua tiket</span>
            <div class="list-group-content">
              <?php foreach ($ticket as $key => $value) { ?>
                <a class="fg-black" href="<?php echo base_url('/ticket/' . $value->ticket_id); ?>">
                  <?php echo $value->ticket_name; ?>
                  <br />
                  <div class="grid">
                    <div class="row cells2">
                      <div class="cell align-left">
                        <?php echo $value->ticket_date_depart; ?>
                      </div>
                      <div class="cell align-right">
                        [<?php echo $this->village->get_village_name($value->source_id); ?> - <?php echo $this->village->get_village_name($value->destination_id); ?>]
                      </div>
                    </div>
                  </div>
                </a>
                <hr class="fg-black bg-black" />
              <?php } ?>
            </div>
          </div>

          <div class="list-group">
            <span class="list-group-toggle">Hari ini</span>
            <div class="list-group-content">
              <?php foreach ($ticket_today as $key => $value) { ?>

                <a class="fg-black" href="<?php echo base_url('/ticket/' . $value->ticket_id); ?>">
                  <?php echo $value->ticket_name; ?>
                  <br />
                  <div class="grid">
                    <div class="row cells2">
                      <div class="cell align-left">
                        <?php echo $value->ticket_date_depart; ?>
                      </div>
                      <div class="cell align-right">
                        [<?php echo $this->village->get_village_name($value->source_id); ?> - <?php echo $this->village->get_village_name($value->destination_id); ?>]
                      </div>
                    </div>
                  </div>
                </a>
                <hr class="fg-black bg-black" />
              <?php } ?>
            </div>
          </div>

          <div class="list-group">
            <span class="list-group-toggle">Besok</span>
            <div class="list-group-content">
              <?php foreach ($ticket_tomorrow as $key => $value) { ?>

                <a class="fg-black" href="<?php echo base_url('/ticket/' . $value->ticket_id); ?>">
                  <?php echo $value->ticket_name; ?>
                  <br />
                  <div class="grid">
                    <div class="row cells2">
                      <div class="cell align-left">
                        <?php echo $value->ticket_date_depart; ?>
                      </div>
                      <div class="cell align-right">
                        [<?php echo $this->village->get_village_name($value->source_id); ?> - <?php echo $this->village->get_village_name($value->destination_id); ?>]
                      </div>
                    </div>
                  </div>
                </a>
                <hr class="fg-black bg-black" />
              <?php } ?>
            </div>
          </div>

        </div>

      </div>
      <div class="cell">
        <div class="" style="height: 350px;">
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
  </div>

</div>
