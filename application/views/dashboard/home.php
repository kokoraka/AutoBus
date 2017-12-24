
          <div class="cell auto-size padding20 bg-white" id="cell-content">

            <h1 class="text-light">Beranda <span class="mif-user place-right"></span></h1>
            <hr class="thin bg-black">
              <form name="" action="<?php echo base_url('/dashboard/change/profile/'); ?>" method="post">
                <div class="grid">

                  <div class="row cells2 no-margin-top no-margin-bottom">
                    <div class="cell">
                      <div class="input-control text text-bold">
                        Nama pengguna
                      </div>
                    </div>
                    <div class="cell">
                      <div class="input-control text">
                        <input type="text" name="username" placeholder="Username" value="<?php echo $user->user_username; ?>" readonly />
                      </div>
                    </div>
                  </div>

                  <div class="row cells2 no-margin-top no-margin-bottom">
                    <div class="cell">
                      <div class="input-control text text-bold">
                        Kata sandi
                      </div>
                    </div>
                    <div class="cell">
                      <div class="input-control text">
                        <input type="password" name="password" placeholder="Password" />
                      </div>
                    </div>
                  </div>

                  <div class="row cells2 no-margin-top no-margin-bottom">
                    <div class="cell">
                      <div class="input-control text text-bold">
                        Nama lengkap
                      </div>
                    </div>
                    <div class="cell">
                      <div class="input-control text">
                        <input type="text" name="realname" placeholder="Realname" value="<?php echo $user->user_realname; ?>" />
                      </div>
                    </div>
                  </div>

                  <div class="row cells2">
                    <div class="cell"><div class="input-control text"></div></div>
                    <div class="cell">
                      <div class="input-control text">
                        <button class="button bg-dark fg-white align-right" type="submit">Simpan</button>
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
