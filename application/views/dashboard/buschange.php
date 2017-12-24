
          <div class="cell auto-size padding20 bg-white" id="cell-content">

            <h1 class="text-light">Ubah Bus <span class="mif-bus place-right"></span></h1>
            <hr class="thin bg-black">
            <a class="button bg-dark fg-white" href="<?php echo base_url('/dashboard/bus'); ?>"><span class="mif-arrow-left"></span> Kembali</a>
            <form name="" action="<?php echo base_url('/dashboard/change/bus/'. $id); ?>" method="post">
              <div class="grid">

                <div class="row cells2 no-margin-top no-margin-bottom">
                  <div class="cell">
                    <div class="input-control text text-bold">
                      Nama bus
                    </div>
                  </div>
                  <div class="cell">
                    <div class="input-control text">
                      <input type="text" name="busname" placeholder="Nama bus" value="<?php echo $bus->bus_name; ?>"  />
                    </div>
                  </div>
                </div>

                <div class="row cells2 no-margin-top no-margin-bottom">
                  <div class="cell">
                    <div class="input-control text text-bold">
                      Kapasitas bus
                    </div>
                  </div>
                  <div class="cell">
                    <div class="input-control text">
                      <input type="number" name="buscapacity" placeholder="Kapasitas bus" value="<?php echo $bus->bus_capacity; ?>" />
                    </div>
                  </div>
                </div>

                <div class="row cells2">
                  <div class="cell"><div class="input-control text"></div></div>
                  <div class="cell">
                    <div class="input-control text">
                      <button class="button bg-dark fg-white align-right" type="submit">Ubah</button>
                    </div>
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
