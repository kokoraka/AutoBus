
          <div class="cell auto-size padding20 bg-white" id="cell-content">

            <h1 class="text-light">Tambah Tiket <span class="mif-versions place-right"></span></h1>
            <hr class="thin bg-black">
            <a class="button bg-dark fg-white" href="<?php echo base_url('/dashboard/ticket'); ?>"><span class="mif-arrow-left"></span> Kembali</a>
            <form name="" action="<?php echo base_url('/dashboard/add/ticket'); ?>" method="post">
              <div class="grid condensed">

                <div class="row cells12">
                  <div class="cell colspan3">
                    <div class="input-control text text-bold" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      Nama tiket
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control text" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      <input type="text" name="ticketname" placeholder="Nama tiket" value=""  />
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control text text-bold" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      Stok tiket
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control text" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      <input type="number" name="ticketquantity" placeholder="Stok tiket" value="" />
                    </div>
                  </div>
                </div>

                <div class="row cells12">
                  <div class="cell colspan3">
                    <div class="input-control text text-bold" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      Harga tiket
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control text" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      <input type="text" name="ticketprice" placeholder="Harga tiket" value=""  />
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control text text-bold" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      Bus
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control select" style="padding-left: 5px; padding-right: 5px;">
                      <select class="select2" name="busid">
                        <?php foreach ($bus as $key => $value): ?>
                          <option value="<?php echo $value->bus_id; ?>"><?php echo $value->bus_name; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row cells12">
                  <div class="cell colspan3">
                    <div class="input-control text text-bold" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      Asal
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control select" style="padding-left: 5px; padding-right: 5px;">
                      <select class="select2" name="sourceid">
                        <?php foreach ($village as $key => $value): ?>
                          <option value="<?php echo $value->village_id; ?>"><?php echo $value->village_name; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control text text-bold" style="width:100%; padding-left: 5px; padding-right: 5px;">
                     Tujuan
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control select" style="padding-left: 5px; padding-right: 5px;">
                      <select class="select2" name="destinationid">
                        <?php foreach ($village as $key => $value): ?>
                          <option value="<?php echo $value->village_id; ?>"><?php echo $value->village_name; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row cells12">
                  <div class="cell colspan3">
                    <div class="input-control text text-bold" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      Waktu berangkat
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control text" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      <input type="text" name="datedepart" class="dtpicker" placeholder="Waktu berangkat" value=""  />
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control text text-bold" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      Waktu tiba
                    </div>
                  </div>
                  <div class="cell colspan3">
                    <div class="input-control text" style="width:100%; padding-left: 5px; padding-right: 5px;">
                      <input type="text" name="datearrive" class="dtpicker" placeholder="Waktu tiba" value=""  />
                    </div>
                  </div>
                </div>

                <div class="row cells12 align-right">
                  <div class="cell colspan12">
                    <button class="button bg-white fg-dark" type="reset">Batalkan</button>
                    <button class="button bg-dark fg-white" type="submit">Tambah</button>
                  </div>
                </div>

              </div>
            </form>
            <hr class="thin bg-grayLighter">

          </div>

        </div>
      </div>
    </div>

  </div>
