
          <div class="cell auto-size padding20 bg-white" id="cell-content">

            <h1 class="text-light">Manajemen Tiket <span class="mif-versions place-right"></span></h1>
            <hr class="thin bg-black">
            <a class="button bg-dark fg-white" href="<?php echo base_url('/dashboard/ticket/add'); ?>"><span class="mif-plus"></span> Tambah Tiket</a>
            <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
              <thead>
                <tr>
                  <td class="sortable-column sort-asc" style="width: 100px">#ID</td>
                  <td class="sortable-column">Nama</td>
                  <td class="sortable-column">Stok</td>
                  <td class="sortable-column">Harga</td>
                  <td class="sortable-column">Tanggal</td>
                  <td class="sortable-column">Lokasi</td>
                  <td class="sortable-column">Bus</td>
                  <td width="200px">Operasi</td>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($ticket as $key => $value) { ?>
                <tr>
                  <td><?php echo $value->ticket_id; ?></td>
                  <td><?php echo $value->ticket_name; ?></td>
                  <td><?php echo $value->ticket_quantity; ?></td>
                  <td><?php echo $value->ticket_price; ?></td>
                  <td>
                    <?php echo $value->ticket_date_depart; ?>
                    <br />
                    <?php echo $value->ticket_date_arrive; ?>
                  </td>
                  <td>
                    <?php echo $this->village->get_village_name($value->source_id); ?> -
                    <?php echo $this->village->get_village_name($value->destination_id); ?>
                  </td>
                  <td><?php echo $this->bus->get_bus_id($value->bus_id)->bus_name; ?></td>
                  <td>
                    <a href="<?php echo base_url('/dashboard/ticket/change/' . $value->ticket_id); ?>" class="button bg-dark fg-white">Ubah</a>
                    <a href="<?php echo base_url('/dashboard/delete/ticket/' . $value->ticket_id); ?>" class="button bg-darkRed fg-white">Hapus</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <hr class="thin bg-grayLighter">

          </div>

        </div>
      </div>
    </div>

  </div>
