$(document).ready(function () {
     const gets = {
          dataLevel: `dataLevel`,
          formLevel: `level-pelanggaran`
     }

     let btnAll;
     const titlePage = 'Level Pelanggaran';
     const fmLevel = $('#FLevelPelanggaran');
     const modalLevel = $('#modalLevelPelanggaran');

     function setupForm(form, mode, title, id) {
          // modal
          $('#modal' + form).off('hidden.bs.modal').on('hidden.bs.modal', function () {
               $(this).find('form')[0].reset();
          });
          $('#modal' + form).modal({
               backdrop: 'static',
               keyboard: false,
               show: true
          });
          $('#MH' + form).html(title);

          // btn
          if (btnAll) {
               btnAll.remove();
          }
          const btnID = mode.toLowerCase() + form;
          const btnFm = $(`<button type="submit" class="btn btn-primary btn-form" id="${btnID}" data-number="${id}">${mode.charAt(0).toUpperCase() + mode.slice(1)}</button>`);
          btnAll = btnFm;
          btnFm.appendTo('.footer' + form);

          // reset all
          $('.invalid-feedback').text('');
          $('#level, #denda, #hukuman').removeClass('is-invalid');
     }

     // Datatables
     const tblLevel = setupDataTables('#level-pelanggaran-tbl', gets.dataLevel, [
          { data: 'DT_RowIndex', className: 'text-center', sortable: false },
          { data: 'level', className: 'text-center' },
          { data: 'denda', className: 'text-center' },
          { data: 'hukuman', sortable: false, render: function (data, type, row) { return data ? data.replace(/\n/g, '<br>') : ''; } },
          { data: 'action', searchable: false, sortable: false, className: 'text-center' }
     ], false, [1, 'asc'], false, true, true, 5, true);
     // End Datatables

     // Create
     $('body').on('click touchstart', '#createLevel', function () {
          setupForm('LevelPelanggaran', 'tambah', 'Tambah ' + titlePage, '');
     });

     // Edit
     $('body').on('click touchstart', '.editData', function () {
          const level_id = $(this).data('id');
          $.ajax({
               url: gets.formLevel + `/${level_id}`,
               type: "GET",
               cache: false,
               success: function (response) {
                    $('#level').val(response.data.level);
                    $('#denda').val(response.data.denda);
                    $('#hukuman').val(response.data.hukuman);
                    setupForm('LevelPelanggaran', 'ubah', 'Ubah ' + titlePage, level_id);
               }
          });
     });

     // Action
     fmLevel.on('submit', function (e) {
          e.preventDefault();
          const submitButton = $(this).find('.btn-form');
          submitButton.addClass('btn-progress disabled');

          const level_id = $(this).find('.btn-form').data('number');
          const url = (level_id) ? `${gets.formLevel}/${level_id}` : gets.formLevel;
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
                         fmLevel[0].reset();
                         modalLevel.modal('hide');
                         tblLevel.draw();
                         showNotif('success', 'topRight', 'Data ' + titlePage, (level_id ? 'Berhasil diubah' : 'Berhasil ditambahkan'));
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
          const level_id = $(this).data('id');
          const level_nama = $(this).data('nama');
          const $button = $(this);
          $button.prop('disabled', true);
          swal({
               title: `Apakah kamu yakin?`,
               text: `jika iya, akan menghapus semua yang berkaitan dengan ${level_nama} secara permanen!`,
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
                         url: gets.formLevel + `/del/${level_id}`,
                         type: "POST",
                         cache: false,
                         success: function () {
                              tblLevel.draw();
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
