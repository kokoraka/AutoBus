<div class="container">
  <header class="margin20 no-margin-left no-margin-right">

  </header>

  <div class="grid">
    <div class="row">
      <div class="cel margin70 no-margin-left no-margin-right padding20 ">

      <?php foreach ($ticket as $key => $value) { ?>

        <div class="panel">
          <div class="heading">
            <span class="icon mif-bus"></span>
            <span class="title"><?php echo $value->ticket_name; ?></span>
          </div>

          <div class="content padding10">
            <div class="grid">

              <div class="row cells2">
                <div class="cell">
                  Tiket: <?php echo $value->ticket_name; ?>
                </div>
                <div class="cell">
                  Tujuan: [<?php echo $this->village->get_village_name($value->source_id); ?> - <?php echo $this->village->get_village_name($value->destination_id); ?>]
                </div>
              </div>
              <div class="row cells2">
                <div class="cell">
                  Keberangkatan: <?php echo $value->ticket_date_depart; ?> | <?php echo $value->ticket_date_arrive; ?>
                </div>
                <div class="cell">
                  Bus: <?php echo $value->bus_id; ?>
                </div>
              </div>
              <div class="row cells2">
                <div class="cell">
                  Stok: <?php echo $value->ticket_quantity; ?>
                </div>
                <div class="cell">
                  Harga: Rp<?php echo $value->ticket_price; ?>
                </div>
              </div>
              <div class="row cells1">
                <div class="cell align-right">
                  <a class="button" href="<?php echo base_url('/ticket/'); ?>">Kembali</a>
                  <button class="button bg-darkRed fg-white">Beli</button>
                </div>
              </div>
            </div>
          </div>

        </div>
        <?php } ?>

      </div>
      <div class="cell">

      </div>
    </div>

  </div>

</div>
