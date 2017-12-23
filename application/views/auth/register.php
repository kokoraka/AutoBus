<div class="grid padding90 no-padding-left no-padding-right">
  <div class="row cells3">
    <div class="cell offset1 padding10">
      <div class="login-form padding20 block-shadow bg-grayLighter">
        <?php echo form_open('register'); ?>
          <h1 class="text-light align-center">Daftar</h1>
          <hr class="thin bg-darkRed" />
          <br />
          <?php echo validation_errors(); ?>
          <br />
          <div class="input-control text full-size" data-role="input">
            <label for="user_login">Username:</label>
            <input type="text" name="username" id="user_login" value="<?php echo set_value('username'); ?>">
            <button class="button helper-button clear"><span class="mif-cross"></span></button>
          </div>
          <br />
          <br />
          <div class="input-control password full-size" data-role="input">
            <label for="user_password">Password:</label>
            <input type="password" name="password" id="user_password">
            <button class="button helper-button reveal"><span class="mif-looks"></span></button>
          </div>
          <br />
          <br />
          <div class="input-control password full-size" data-role="input">
            <label for="user_password_confirm">Konfirmasi Password:</label>
            <input type="password" name="confirm_password" id="user_password_confirm">
            <button class="button helper-button reveal"><span class="mif-looks"></span></button>
          </div>
          <br />
          <br />
          <div class="form-actions">
            <button type="submit" class="button bg-darkRed fg-white">Daftar</button>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
