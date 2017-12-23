

    <div class="container-fluid bg-black fg-white padding20 no-padding-left no-padding-right">
      <footer>
        <div class="bottom-menu-wrapper">
          <ul class="horizontal-menu compact">
            <li class="fg-white">
              <a>
                Copyright &copy; 2017 all right reserved Gurisa.Com
                <br /><br />
                Developed by: Raka S.W
              </a>
            </li>
            <li class="place-right fg-white bg-hover-white fg-hover-black"><a href="<?php echo base_url('/about/'); ?>">Tentang</a></li>
            <li class="place-right fg-white bg-hover-white fg-hover-black"><a href="<?php echo base_url('/ticket/'); ?>">Tiket</a></li>
            <?php if ($logged_in === FALSE) { ?>
            <li class="place-right fg-white bg-hover-white fg-hover-black"><a href="<?php echo base_url('/login/'); ?>">Login</a></li>
            <?php } ?>
          </ul>
        </div>
      </footer>
    </div>


    <script src="<?php echo base_url('/assets/metrouicss/js/metro.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/metrouicss/js/select2.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/custom/js/configuration.js'); ?>"></script>
  </body>
</html>
