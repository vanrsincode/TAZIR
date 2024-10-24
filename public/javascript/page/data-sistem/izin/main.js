$(document).ready(function () {
     const gets = {
          dataIzin: `dataIzin`,
          formIzin: `izin`
     }

     let btnAll;
     const titlePage = 'Izin';
     const formPage = $('#FIzin');
     const modalPage = $('#modalIzin');

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
          $('#nama_kelas').removeClass('is-invalid');
     }

     // Datatables
     const tablePage = setupDataTables('#izin-tbl', gets.dataIzin, [
          { data: 'DT_RowIndex', className: 'text-center', sortable: false },
          { data: 'nama_izin', className: 'text-center' },
          { data: 'jangka_waktu', className: 'text-center' },
          { data: 'action', searchable: false, sortable: false, className: 'text-center' }
     ], false, [1, 'asc'], false, true, true, 5, true);
     // End Datatables

     // Create
     $('body').on('click touchstart', '#createIzin', function () {
          setupForm('Izin', 'tambah', 'Tambah ' + titlePage, '');
     });

     // Edit
     $('body').on('click touchstart', '.editData', function () {
          const izin_id = $(this).data('id');
          $.ajax({
               url: gets.formIzin + `/${izin_id}`,
               type: "GET",
               cache: false,
               success: function (response) {
                    $('#nama_izin').val(response.data.nama_izin);
                    $('#jangka_waktu').val(response.data.jangka_waktu);
                    setupForm('Izin', 'ubah', 'Ubah ' + titlePage, izin_id);
               }
          });
     });

     // Action
     formPage.on('submit', function (e) {
          e.preventDefault();
          const submitButton = $(this).find('.btn-form');
          submitButton.addClass('btn-progress disabled');

          const izin_id = $(this).find('.btn-form').data('number');
          const url = (izin_id) ? `${gets.formIzin}/${izin_id}` : gets.formIzin;
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
                         showNotif('success', 'topRight', 'Data ' + titlePage, (izin_id ? 'Berhasil diubah' : 'Berhasil ditambahkan'));
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
          const izin_id = $(this).data('id');
          const izin_nama = $(this).data('nama');
          const $button = $(this);
          $button.prop('disabled', true);
          swal({
               title: `Apakah kamu yakin?`,
               text: `jika iya, akan menghapus semua yang berkaitan dengan ${izin_nama} secara permanen!`,
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
                         url: gets.formIzin + `/del/${izin_id}`,
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
