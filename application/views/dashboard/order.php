
          <div class="cell auto-size padding20 bg-white" id="cell-content">

            <h1 class="text-light">Manajemen Pembelian <span class="mif-dollar place-right"></span></h1>
            <hr class="thin bg-black">
            <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
              <thead>
                <tr>
                  <td class="sortable-column sort-asc" style="width: 100px">#ID</td>
                  <td class="sortable-column">Tanggal (Status)</td>
                  <td class="sortable-column">Detil</td>
                  <?php if ($user->authority_id == 'ROOT') { ?>
                  <td width="200px">Operasi</td>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($order as $key => $value) { ?>
                <tr>
                  <td><?php echo $value->order_id; ?></td>
                  <td>
                    <?php echo $value->order_date . ' (' . $this->order->get_order_status($value->order_status). ')'; ?>
                  </td>
                  <td>
                    <ul type="square">
                    <?php foreach ($this->order->get_order_detil($value->order_id) as $key2 => $value2) { ?>
                      <li><?php echo $this->ticket->get_ticket_id($value2->ticket_id)[0]->ticket_name; ?></li>
                    <?php } ?>
                    </ul>
                  </td>
                  <?php if ($user->authority_id == 'ROOT') { ?>
                  <td>
                    <a href="<?php echo base_url('/dashboard/delete/order/' . $value->order_id); ?>" class="button bg-darkRed fg-white">Hapus</a>
                    <?php if ($value->order_status != "D") { ?>
                    <a href="<?php echo base_url('/dashboard/change/order/' . $value->order_id); ?>" class="button bg-dark fg-white">Setujui</a>
                    <?php } ?>
                  </td>
                  <?php } ?>
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
