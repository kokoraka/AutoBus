
          <div class="cell auto-size padding20 bg-white" id="cell-content">

            <h1 class="text-light">Manajemen Pengguna <span class="mif-users place-right"></span></h1>
            <hr class="thin bg-black">
            <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
              <thead>
                <tr>
                  <td class="sortable-column sort-asc" style="width: 150px">#Username</td>
                  <td class="sortable-column">Nama Lengkap</td>
                  <td class="sortable-column">Otoritas</td>
                  <td width="200px">Operasi</td>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $key => $value) { ?>
                  <?php if ($value->user_username !== $this->session->userdata('user_username')) { ?>
                  <tr>
                    <td><?php echo $value->user_username; ?></td>
                    <td><?php echo $value->user_realname; ?></td>
                    <td>
                      <?php echo $value->authority_id; ?>
                    </td>
                    <td>
                      <a href="<?php echo base_url('/dashboard/delete/user/' . $value->user_username); ?>" class="button bg-darkRed fg-white">Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                <?php } ?>
              </tbody>
            </table>

            <hr class="thin bg-grayLighter">
          </div>

        </div>
      </div>
    </div>

  </div>
