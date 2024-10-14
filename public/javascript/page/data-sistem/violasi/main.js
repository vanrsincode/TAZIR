$(document).ready(function () {
     const gets = {
          dataViolasi: `dataViolasi`,
          formViolasi: `klasifikasi-violasi`
     }

     let btnAll;
     const titlePage = 'Klasifikasi Violasi';
     const formPage = $('#FKlasifikasiViolasi');
     const modalPage = $('#modalKlasifikasiViolasi');

     const selLevel = $('#level');
     selLevel.select2({
          placeholder: "-- Pilih Level --",
          ajax: {
               url: `selectLevel`,
               dataType: 'json',
               // delay: 100,
               cache: false,
               data: params => ({ term: params.term }),
               processResults: data => {
                    return {
                         results: data.map(item => ({
                              id: item.id,
                              text: `${item.level}`
                         }))
                    };
               },
          }, language: urlSelID
     });

     function setupForm(form, mode, title, id) {
          // btn
          if (btnAll) {
               btnAll.remove();
          }
          const btnID = mode.toLowerCase() + form;
          const btnFm = $(`<button type="submit" class="btn btn-theme text-light btn-form" id="${btnID}" data-number="${id}">${mode.charAt(0).toUpperCase() + mode.slice(1)}</button>`);
          btnAll = btnFm;
          btnFm.appendTo('.footer' + form);
          // modal
          $('#modal' + form).off('hidden.bs.modal').on('hidden.bs.modal', function () {
               $(this).find('form')[0].reset();
          });
          $('#modal' + form).modal({backdrop: 'static', keyboard: false, show: true});
          $('#MH' + form).html(title);
          // reset all
          $('.invalid-feedback').text('');
          $('#nama, #larangan, #level, #batas_maksimal').removeClass('is-invalid');
     }

     // Datatables
     const customColumnDefs = [
          { targets: [1], className: 'datatable-column-ellipsis text-left' },
          { targets: [2], className: 'datatable-column-ellipsis text-center' },
          { targets: [5], className: 'datatable-column-ellipsis text-center' },
     ];
     const tablePage = setupDataTables('#klasifikasi-violasi-tbl', gets.dataViolasi, [
          { data: 'DT_RowIndex', className: 'text-center', sortable: false },
          { data: 'nama_violasi'},
          { data: 'larangan'},
          { data: 'level', className: 'text-center' },
          { data: 'denda', className: 'text-center' },
          { data: 'hukuman' },
          { data: 'maks', className: 'text-center' },
          { data: 'action', searchable: false, sortable: false, className: 'text-center' }
     ], false, [1, 'asc'], false, true, true, 10, true,customColumnDefs);
     // End Datatables

     // Create
     $('body').on('click touchstart', '#createKlasifikasiViolasi', function () {
          setupForm('KlasifikasiViolasi', 'tambah', 'Tambah ' + titlePage, '');
          selLevel.empty().append(`<option value=""></option>`).trigger('change.select2');
     });

     // Edit
     $('body').on('click touchstart', '.editData', function () {
          const violasi_id = $(this).data('id');
          $.ajax({
               url: gets.formViolasi + `/${violasi_id}`,
               type: "GET",
               cache: false,
               success: function (response) {
                    const data = response.data;
                    $('#nama').val(data.nama_violasi);
                    $('#larangan').val(data.larangan);
                    $('#batas_maksimal').val(data.maks);
                    selLevel.empty().append(`<option value="${data.level.id}">${data.level.level}</option>`).trigger('change.select2');
                    setupForm('KlasifikasiViolasi', 'ubah', 'Ubah ' + titlePage, violasi_id);
               }
          });
     });

     // Action
     formPage.on('submit', function (e) {
          e.preventDefault();
          const submitButton = $(this).find('.btn-form');
          submitButton.addClass('btn-progress disabled');

          const violasi_id = $(this).find('.btn-form').data('number');
          const url = (violasi_id) ? `${gets.formViolasi}/${violasi_id}` : gets.formViolasi;
          const formData = new FormData(this);

          $.ajax({
               data: formData,
               url: url,
               type: 'POST',
               processData: false,
               contentType: false,
               cache: false,
               success: function (data) {
                    if ($.isEmptyObject(data.errors)) {
                         formPage[0].reset();
                         modalPage.modal('hide');
                         tablePage.draw();
                         showNotif('success', 'topRight', 'Data ' + titlePage, (violasi_id ? 'Berhasil diubah' : 'Berhasil ditambahkan'));
                    } else {
                         errorMsg(data.errors, 'Form ' + titlePage, 'Mohon periksa kembali! Terdapat kolom yang kosong');
                    }
               },
               complete: function () {
                    submitButton.removeClass('btn-progress disabled');
               }
          });
     });

     // Delete
     $('body').on('click touchstart', '.deleteData', function () {
          const violasi_id = $(this).data('id');
          const violasi_nama = $(this).data('nama');
          const $button = $(this);
          $button.prop('disabled', true);
          swal({
               title: `Apakah kamu yakin?`,
               text: `jika iya, akan menghapus semua yang berkaitan dengan ${violasi_nama} secara permanen!`,
               icon: 'warning',
               buttons: {
                    cancel: {
                         text: 'Tidak',
                         value: null,
                         visible: true,
                         className: '',
                         closeModal: true
                    },
                    confirm: {
                         text: 'Ya, hapus!',
                         value: true,
                         visible: true,
                         className: 'btn-danger',
                    },
               },
               dangerMode: true,
               closeOnClickOutside: false,
               closeOnEsc: false
          }).then((willDelete) => {
               if (willDelete) {
                    $.ajax({
                         url: gets.formViolasi + `/del/${violasi_id}`,
                         type: "POST",
                         cache: false,
                         success: function () {
                              tablePage.draw();
                              swal('Data Berhasil Dihapus', {
                                   icon: 'success',
                              });
                         },
                         complete: function () {
                              $button.prop('disabled', false);
                         }
                    });
               } else {
                    $button.prop('disabled', false);
               }
          });
     });
});
