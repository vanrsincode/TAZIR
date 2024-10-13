$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

// DataTable
const commonDataTableOptions = {
    autoWidth: false,
    lengthMenu: [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
    language: { url: urlTableID },
    processing: true,
    serverSide: true,
};
function setupDataTables(idTable, url, columns, ordering, order, responsive, searching, lengthChange, pageLength, bInfo, columnDefs = []) {
    return $(idTable).DataTable({
        ...commonDataTableOptions,
        responsive,
        searching,
        ordering,
        lengthChange,
        pageLength,
        bInfo,
        ajax: url,
        columns,
        order,
        columnDefs: [
            ...columnDefs,
            // {
            //     targets: [0], // Indeks kolom yang akan diatur
            //     width: '200px',
            //     className: 'datatable-column'
            // }
        ],
    });
}

// Notifikasi
function showNotif(type = 'info', position = 'topRight', title = '', message) {
    iziToast[type]({
        position,
        title,
        message,
    });
}
