
          <div class="cell auto-size padding20 bg-white" id="cell-content">

            <h1 class="text-light">Manajemen Bus <span class="mif-bus place-right"></span></h1>
            <hr class="thin bg-black">
            <a class="button bg-dark fg-white" href="<?php echo base_url('/dashboard/bus/add'); ?>"><span class="mif-plus"></span> Tambah Bus</a>
            <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
              <thead>
                <tr>
                  <td class="sortable-column sort-asc" style="width: 100px">#ID</td>
                  <td class="sortable-column">Nama Bus</td>
                  <td class="sortable-column">Kapasitas</td>
                  <td width="200px">Operasi</td>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($bus as $key => $value) { ?>
                <tr>
                  <td><?php echo $value->bus_id; ?></td>
                  <td><?php echo $value->bus_name; ?></td>
                  <td><?php echo $value->bus_capacity; ?></td>
                  <td>
                    <a href="<?php echo base_url('/dashboard/bus/change/' .$value->bus_id); ?>" class="button bg-dark fg-white">Ubah</a>
                    <a href="<?php echo base_url('/dashboard/delete/bus/' .$value->bus_id); ?>" class="button bg-darkRed fg-white">Hapus</a>
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
