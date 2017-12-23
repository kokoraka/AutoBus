<div class="container">
  <header class="margin20 no-margin-left no-margin-right">
    <div class="clear-float">
      <a class="place-left fg-black padding10 no-padding-top" href="#" title="">
        <h1 class="">Tiket Bandung AutoBus</h1>
      </a>
    </div>
    <!-- main menu -->
    <ul class="m-menu bg-grayDark">
      <li class="bg-grayDark fg-white"><a href="#today">Hari ini</a></li>
      <li class="bg-grayDark fg-white"><a href="#tomorrow">Besok</a></li>
    </ul>

  </header>

  <div class="grid">
    <div class="row cells1">
      <div class="cell">

        <form class="margin10 no-margin-left no-margin-right">
          <div class="grid">
            <div class="row cells3">
              <div class="cell">
                <div class="input-control select" style="width:100%;">
                  <label>Asal</label>
                  <select class="select2">
                    <?php foreach ($village as $key => $value) { ?>
                      <option value="<?php echo $value->village_id; ?>">
                        <?php echo $value->village_name; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="cell">
                <div class="input-control select" style="width:100%;">
                  <label>Tujuan</label>
                  <select class="select2">
                    <?php foreach ($village as $key => $value) { ?>
                      <option value="<?php echo $value->village_id; ?>">
                        <?php echo $value->village_name; ?>
                      </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="cell">
                <button type="button" class="button bg-darkRed bg-active-grayDark fg-white">Cari tiket</button>
              </div>
            </div>
          </div>
        </form>


        <div class="listview-outlook" data-role="listview">

          <div class="list-group">
            <span class="list-group-toggle">Semua tiket</span>
            <div class="list-group-content">
              <?php foreach ($ticket as $key => $value) { ?>
                <div>
                  <?php echo $value->ticket_name; ?>
                  <br />
                  <div class="grid">
                    <div class="row cells3">
                      <div class="cell align-left">
                        <?php echo $value->ticket_date_depart; ?>
                        |
                        <?php echo $value->ticket_date_arrive; ?>
                      </div>
                      <div class="cell">
                        [<?php echo $this->village->get_village_name($value->source_id); ?> - <?php echo $this->village->get_village_name($value->destination_id); ?>]
                      </div>
                      <div class="cell align-right">
                        <a class="button" href="<?php echo base_url('/ticket/' . $value->ticket_id); ?>">Lihat</a>
                        <button class="button bg-darkRed fg-white">Beli</button>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>

          <div id="today" class="list-group">
            <span class="list-group-toggle">Hari ini</span>
            <div class="list-group-content">
              <?php foreach ($ticket_today as $key => $value) { ?>

                <div>
                  <?php echo $value->ticket_name; ?>
                  <br />
                  <div class="grid">
                    <div class="row cells3">
                      <div class="cell align-left">
                        <?php echo $value->ticket_date_depart; ?>
                        |
                        <?php echo $value->ticket_date_arrive; ?>
                      </div>
                      <div class="cell">
                        [<?php echo $village_model->get_village_name($value->source_id); ?> - <?php echo $village_model->get_village_name($value->destination_id); ?>]
                      </div>
                      <div class="cell align-right">
                        <a class="button" href="<?php echo base_url('/ticket/' . $value->ticket_id); ?>">Lihat</a>
                        <button class="button bg-darkRed fg-white">Beli</button>
                      </div>
                    </div>
                  </div>
                </div>

              <?php } ?>
            </div>
          </div>

          <div id="tomorrow" class="list-group">
            <span class="list-group-toggle">Besok</span>
            <div class="list-group-content">
              <?php foreach ($ticket_tomorrow as $key => $value) { ?>
                <div>
                  <?php echo $value->ticket_name; ?>
                  <br />
                  <div class="grid">
                    <div class="row cells3">
                      <div class="cell align-left">
                        <?php echo $value->ticket_date_depart; ?>
                        |
                        <?php echo $value->ticket_date_arrive; ?>
                      </div>
                      <div class="cell">
                        [<?php echo $village_model->get_village_name($value->source_id); ?> - <?php echo $village_model->get_village_name($value->destination_id); ?>]
                      </div>
                      <div class="cell align-right">
                        <a class="button" href="<?php echo base_url('/ticket/' . $value->ticket_id); ?>">Lihat</a>
                        <button class="button bg-darkRed fg-white">Beli</button>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>

      </div>
      <div class="cell">



      </div>
    </div>
  </div>

</div>
