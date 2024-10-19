$(document).ready(function () {
     const gets = {
          dataSantri: `dataSantri`,
          formSantri: `data-santri`
     }

     let btnAll;
     const titlePage = 'Data Santri';
     const formPage = $('#FSantri');
     const modalPage = $('#modalSantri');

     const selKelas = $('#kelas');
     selKelas.select2({
          placeholder: "-- Pilih Kelas --",
          ajax: {
               url: `selectKelas`,
               dataType: 'json',
               // delay: 100,
               cache: false,
               data: params => ({ term: params.term }),
               processResults: data => {
                    return {
                         results: data.map(item => ({id: item.id, text: `${item.nama_kelas}`}))
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
          $('#nis, #nama, #kelas, #jk, #alamat, #wali_santri, #no_wali, #ft_santri').removeClass('is-invalid');
     }

     // Datatables
     const tablePagePutra = setupDataTables('#santri-putra-tbl', gets.dataSantri + '/Laki-laki', [
          { data: 'DT_RowIndex', className: 'text-center', sortable: false },
          { data: 'nis', className: 'text-center' },
          { data: 'nama_santri', className: 'text-center' },
          { data: 'nama_kelas', className: 'text-center' },
          { data: 'alamat_santri', className: 'datatable-column-ellipsis text-center', sortable: false, render: function (data, type, row) { return data ? data.replace(/\n/g, '<br>') : ''; } },
          { data: 'nama_wali', className: 'text-center' },
          { data: 'tlp_wali', className: 'text-center' },
          { data: 'foto', className: 'text-center' },
          { data: 'action', searchable: false, sortable: false, className: 'text-center' }
     ], false, [1, 'asc'], false, true, true, 10, true);
     const tablePagePutri = setupDataTables('#santri-putri-tbl', gets.dataSantri + '/Perempuan', [
          { data: 'DT_RowIndex', className: 'text-center', sortable: false },
          { data: 'nis', className: 'text-center' },
          { data: 'nama_santri', className: 'text-center' },
          { data: 'nama_kelas', className: 'text-center' },
          { data: 'alamat_santri', className: 'datatable-column-ellipsis text-center', sortable: false, render: function (data, type, row) { return data ? data.replace(/\n/g, '<br>') : ''; } },
          { data: 'nama_wali', className: 'text-center' },
          { data: 'tlp_wali', className: 'text-center' },
          { data: 'foto', className: 'text-center' },
          { data: 'action', searchable: false, sortable: false, className: 'text-center' }
     ], false, [1, 'asc'], false, true, true, 10, true);
     // End Datatables

     // Create
     $('body').on('click touchstart', '#createSantri', function () {
          setupForm('Santri', 'tambah', 'Tambah ' + titlePage, '');
          selKelas.empty().append(`<option value=""></option>`).trigger('change.select2');
     });

     // Edit
     $('body').on('click touchstart', '.editData', function () {
          const santri_id = $(this).data('id');
          $.ajax({
               url: gets.formSantri + `/${santri_id}`,
               type: "GET",
               cache: false,
               success: function (response) {
                    const data = response.data;
                    $('#nis').val(data.nis);
                    $('#nama').val(data.nama_santri);
                    $('#jk').val(data.jk_santri);
                    $('#alamat').val(data.alamat_santri);
                    $('#wali_santri').val(data.nama_wali);
                    $('#no_wali').val(data.tlp_wali);
                    selKelas.empty().append(`<option value="${data.kelas.id}">${data.kelas.nama_kelas}</option>`).trigger('change.select2');
                    setupForm('Santri', 'ubah', 'Ubah ' + titlePage, santri_id);
               }
          });
     });

     // Action
     formPage.on('submit', function (e) {
          e.preventDefault();
          const submitButton = $(this).find('.btn-form');
          submitButton.addClass('btn-progress disabled');

          const santri_id = $(this).find('.btn-form').data('number');
          const url = (santri_id) ? `${gets.formSantri}/${santri_id}` : gets.formSantri;
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
                         tablePagePutra.draw();
                         tablePagePutri.draw();
                         showNotif('success', 'topRight', titlePage, (santri_id ? 'Berhasil diubah' : 'Berhasil ditambahkan'));
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
          const santri_id = $(this).data('id');
          const santri_nama = $(this).data('nama');
          const $button = $(this);
          $button.prop('disabled', true);
          swal({
               title: `Apakah kamu yakin?`,
               text: `jika iya, akan menghapus semua yang berkaitan dengan ${santri_nama} secara permanen!`,
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
                         url: gets.formSantri + `/del/${santri_id}`,
                         type: "POST",
                         cache: false,
                         success: function () {
                              tablePagePutra.draw();
                              tablePagePutri.draw();
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
