$(document).ready(function () {
     const selSantri = $('#santri');
     const selLarangan = $('#larangan');
     const selPelanggaran = $('#pelanggaran');

     selSantri.select2({
          placeholder: "-- Pilih Santri --",
          ajax: {
               url: `selectSantri`,
               dataType: 'json',
               cache: false,
               data: params => ({
                    term: params.term
               }),
               processResults: data => {
                    return {
                         results: data.map(item => ({
                              id: item.id,
                              text: `${item.nis} | ${item.nama_santri} | ${item.kelas.nama_kelas}`
                         }))
                    };
               }
          }, language: urlSelID
     });

     selLarangan.select2({
          placeholder: "-- Pilih Larangan --",
          ajax: {
               url: `selectLarangan`,
               dataType: 'json',
               cache: false,
               data: params => ({
                    term: params.term
               }),
               processResults: data => {
                    return {
                         results: data.map(item => ({
                              id: item,
                              text: `${item}`
                         }))
                    };
               }
          }, language: urlSelID
     });

     selPelanggaran.empty().prop('disabled', true).select2({
          placeholder: "-- Pilih Pelanggaran --"
     });

     selLarangan.on('change', function () {
          const larangan = $(this).val();

          if (larangan) {
               $.ajax({
                    url: `selectPelanggaran/${larangan}`, 
                    dataType: 'json',
                    success: function (data) {
                         selPelanggaran.empty(); 
                         data.forEach(item => {
                              selPelanggaran.append(new Option(item.nama_violasi, item.id));
                         });
                         selPelanggaran.prop('disabled', false).trigger('change');
                    },
                    error: function () {
                         console.error('Terjadi kesalahan saat mengambil pelanggaran.');
                    }
               });
          }
     });
});