<style>
    html, body {
        height: 100%;
    }
    body {
    }
    .page-content {
        padding-top: 3.125rem;
        min-height: 100%;
        height: 100%;
    }
    .table .input-control.checkbox {
        line-height: 1;
        min-height: 0;
        height: auto;
    }

    @media screen and (max-width: 800px){
        #cell-sidebar {
            flex-basis: 52px;
        }
        #cell-content {
            flex-basis: calc(100% - 52px);
        }
    }

    @media screen and (max-width: 635px){
      #cell-sidebar {
        display: none;
      }
    }
</style>
<body>
  <div class="container-fluid">

    <div class="page-content no-padding" style="min-height: 80vh;">
      <!-- page-content -->
      <div class="flex-grid no-responsive-future">
        <div class="row">
          <div class="cell size-x200" id="cell-sidebar">
            <ul class="sidebar bg-grayDark" style="min-height: 80vh;">
              <li class="active">
                <a href="#">
                  <span class="mif-apps icon"></span>
                  <span class="title">Beranda</span>
                  <span class="counter">0</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="mif-bus icon"></span>
                  <span class="title">Bus</span>
                  <span class="counter">0</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="mif-versions icon"></span>
                  <span class="title">Tiket</span>
                  <span class="counter">2</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="mif-dollar2 icon"></span>
                  <span class="title">Transaksi</span>
                  <span class="counter">0</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="mif-users icon"></span>
                  <span class="title">Pengguna</span>
                  <span class="counter">0</span>
                </a>
              </li>
            </ul>
          </div>

          <div class="cell auto-size padding20 bg-white" id="cell-content">

            <h1 class="text-light">Manajemen Bus <span class="mif-bus place-right"></span></h1>
            <hr class="thin bg-black">
            <button class="button primary"><span class="mif-plus"></span> Create...</button>
            <button class="button success"><span class="mif-play"></span> Start</button>
            <button class="button warning"><span class="mif-loop2"></span> Restart</button>
            <button class="button alert">Stop all machines</button>
            <hr class="thin bg-grayLighter">
            <table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
              <thead>
                <tr>
                  <td style="width: 20px">
                  </td>
                  <td class="sortable-column sort-asc" style="width: 100px">ID</td>
                  <td class="sortable-column">Machine name</td>
                  <td class="sortable-column">Address</td>
                  <td class="sortable-column" style="width: 20px">Status</td>
                  <td style="width: 20px">Switch</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <label class="input-control checkbox small-check no-margin">
                      <input type="checkbox">
                      <span class="check"></span>
                    </label>
                  </td>
                  <td>123890723212</td>
                  <td>Machine number 1</td>
                  <td><a href="http://virtuals.com/machines/123890723212">link</a></td>
                  <td class="align-center"><span class="mif-checkmark fg-green"></span></td>
                  <td>
                    <label class="switch-original">
                      <input type="checkbox" checked>
                      <span class="check"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="input-control checkbox small-check no-margin">
                      <input type="checkbox">
                      <span class="check"></span>
                    </label>
                  </td>
                  <td>123890723212</td>
                  <td>Machine number 2</td>
                  <td><a href="http://virtuals.com/machines/123890723212">link</a></td>
                  <td class="align-center"><span class="mif-stop fg-red"></span></td>
                  <td>
                    <label class="switch-original">
                      <input type="checkbox">
                      <span class="check"></span>
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>
      </div>
    </div>

  </div>


  <script>
    $(function() {
      $('.sidebar').on('click', 'li', function() {
        if (!$(this).hasClass('active')) {
          $('.sidebar li').removeClass('active');
          $(this).addClass('active');
        }
      })
    })
  </script>
