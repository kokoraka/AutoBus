$(document).ready(function() {
  $(function(){
      $('.sidebar').on('click', 'li', function(){
          if (!$(this).hasClass('active')) {
              $('.sidebar li').removeClass('active');
              $(this).addClass('active');
          }
      });
  });

  if ($('.select2').length > 0) {
    $('.select2').select2();
  }

  if ($(".accordion").length > 0) {
    $(".accordion").accordion();
  }

  if ($('#ticket-search-result').length > 0) {
    if ($('button[name=search-ticket]').length > 0 && $('select[name=ticket-search-source]').length > 0 && $('select[name=ticket-search-destination]').length > 0) {
      $('button[name=search-ticket]').on('click', function() {
        var data = {
          'source' : $('select[name=ticket-search-source]').val(),
          'destination' : $('select[name=ticket-search-destination]').val()
        };
        $.ajax({
          type: "POST",
          url: "/json/search/ticket",
          data: data,
          cache: false,
          success: function(result) {
            result = JSON.parse(result);
            var res = '';
            if (result.all.length > 0 || result.today.length > 0 || result.tomorrow.length > 0) {
              if (result.all.length > 0) {
                res += '<div id="all" class="list-group">';
                res += '<span class="list-group-toggle">Semua tiket</span>';
                res += '<div class="list-group-content">';
                for (i = 0; i < result.all.length; i++) {
                  res += '<div>' + result.all[i].ticket_name + ' ';
                  res += '<br /><div class="grid">';
                  res += '<div class="row cells3">';
                  res += '<div class="cell align-left">';
                  res += '' + result.all[i].ticket_date_depart + ' | ' + result.all[i].ticket_date_arrive + '';
                  res += '</div><div class="cell">';
                  res += '[' + result.all[i].source_id + ' - ' + result.all[i].destination_id + ']';
                  res += '</div>';
                  res += '<div class="cell align-right">';
                  res += '<a class="button" href="/ticket/' + result.all[i].ticket_id + '">Lihat</a>';
                  res += '<button class="button bg-darkRed fg-white">Beli</button>';
                  res += '</div></div></div></div>';
                }

                res += '</div></div>';
              }
              if (result.today.length > 0) {
                res += '<div id="all" class="list-group">';
                res += '<span class="list-group-toggle">Hari ini</span>';
                res += '<div class="list-group-content">';
                for (i = 0; i < result.today.length; i++) {
                  res += '<div>' + result.today[i].ticket_name + ' ';
                  res += '<br /><div class="grid">';
                  res += '<div class="row cells3">';
                  res += '<div class="cell align-left">';
                  res += '' + result.today[i].ticket_date_depart + ' | ' + result.today[i].ticket_date_arrive + '';
                  res += '</div><div class="cell">';
                  res += '[' + result.today[i].source_id + ' - ' + result.today[i].destination_id + ']';
                  res += '</div>';
                  res += '<div class="cell align-right">';
                  res += '<a class="button" href="/ticket/' + result.today[i].ticket_id + '">Lihat</a>';
                  res += '<button class="button bg-darkRed fg-white">Beli</button>';
                  res += '</div></div></div></div>';
                }

                res += '</div></div>';
              }
              if (result.tomorrow.length > 0) {
                res += '<div id="all" class="list-group">';
                res += '<span class="list-group-toggle">Besok</span>';
                res += '<div class="list-group-content">';
                for (i = 0; i < result.tomorrow.length; i++) {
                  res += '<div>' + result.tomorrow[i].ticket_name + ' ';
                  res += '<br /><div class="grid">';
                  res += '<div class="row cells3">';
                  res += '<div class="cell align-left">';
                  res += '' + result.tomorrow[i].ticket_date_depart + ' | ' + result.tomorrow[i].ticket_date_arrive + '';
                  res += '</div><div class="cell">';
                  res += '[' + result.tomorrow[i].source_id + ' - ' + result.tomorrow[i].destination_id + ']';
                  res += '</div>';
                  res += '<div class="cell align-right">';
                  res += '<a class="button" href="/ticket/' + result.tomorrow[i].ticket_id + '">Lihat</a>';
                  res += '<button class="button bg-darkRed fg-white">Beli</button>';
                  res += '</div></div></div></div>';
                }

                res += '</div></div>';
              }
            }
            else {
              res += 'Tiket tidak ditemukan';
            }
            $('#ticket-search-result').html(res);
          }
        });
      });
    }
  }
});
