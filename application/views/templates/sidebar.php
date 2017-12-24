<div class="container-fluid">

  <div class="page-content no-padding" style="min-height: 80vh;">
    <!-- page-content -->
    <div class="flex-grid no-responsive-future">
      <div class="row">
        <div class="cell size-x200" id="cell-sidebar">
          <ul class="sidebar bg-grayDark" style="min-height: 80vh; height: 100vh;">
            <li class="<?php if ($page == 'home') {echo 'active';} ?> bg-hover-black fg-hover-white">
              <a href="<?php echo base_url('/dashboard/') ?>">
                <span class="mif-apps icon"></span>
                <span class="title">Beranda</span>
              </a>
            </li>
            <?php if ($user->authority_id == 'ROOT') { ?>
            <li class="<?php if ($page == 'bus' || $page == 'busadd'|| $page == 'buschange') {echo 'active';} ?> bg-hover-black fg-hover-white">
              <a href="<?php echo base_url('/dashboard/bus/') ?>">
                <span class="mif-bus icon"></span>
                <span class="title">Bus</span>
                <span class="counter"><?php echo count($bus); ?></span>
              </a>
            </li>
            <li class="<?php if ($page == 'ticket' || $page == 'ticketadd'|| $page == 'ticketchange') {echo 'active';} ?> bg-hover-black fg-hover-white">
              <a href="<?php echo base_url('/dashboard/ticket/') ?>">
                <span class="mif-versions icon"></span>
                <span class="title">Tiket</span>
                <span class="counter"><?php echo count($ticket); ?></span>
              </a>
            </li>
            <?php } ?>
            <li class="<?php if ($page == 'order') {echo 'active';} ?> bg-hover-black fg-hover-white">
              <a href="<?php echo base_url('/dashboard/order/') ?>">
                <span class="mif-dollar icon"></span>
                <span class="title">Pembelian</span>
                <span class="counter"><?php echo count($order); ?></span>
              </a>
            </li>
            <li class="<?php if ($page == 'transaction') {echo 'active';} ?> bg-hover-black fg-hover-white">
              <a href="<?php echo base_url('/dashboard/transaction/') ?>">
                <span class="mif-dollar2 icon"></span>
                <span class="title">Transaksi</span>
                <span class="counter"><?php echo count($transaction); ?></span>
              </a>
            </li>
            <?php if ($user->authority_id == 'ROOT') { ?>
            <li class="<?php if ($page == 'users' || $page == 'usersadd'|| $page == 'userschange') {echo 'active';} ?> bg-hover-black fg-hover-white">
              <a href="<?php echo base_url('/dashboard/users/') ?>">
                <span class="mif-users icon"></span>
                <span class="title">Pengguna</span>
                <span class="counter"><?php echo count($users) - 1; ?></span>
              </a>
            </li>
            <?php } ?>
          </ul>
        </div>
