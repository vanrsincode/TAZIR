@extends('admin-panel.layouts.main')

@section('title', 'Datatables')

@push('css_vendor')
    <link rel="stylesheet" href="{{ asset('adm-panel/vendor') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('adm-panel/vendor') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
@endpush

@section('content')
    <section class="section">
        <div class="section-header irounded-1 shadow">
            <h1 class="text-dark">DataTables</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">undefined</div>
                <div class="breadcrumb-item text-dark active">undefined</div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card irounded-1 shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <p class="card-title font-weight-bold text-dark" style="white-space: nowrap;">Tabel Datatables</p>
                        <button type="button" class="Btn" id="createDatatables">
                            <div class="btn-ico-plus">
                                <span class="fas fa-plus"></span>
                            </div>

                            <div class="btn-text">Tambah Data</div>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped dt-responsive nowrap" id="datatables-tbl">
                                <thead class="bg-secondary text-dark">
                                    <tr style="text-align-last: center;">
                                        <th width="50px">#</th>
                                        <th>Name</th>
                                        <th width="120px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align-last: center;">
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js_vendor')
    <script src="{{ asset('adm-panel/vendor') }}/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('adm-panel/vendor') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('adm-panel/vendor') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('adm-panel/vendor') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
@endpush

@push('js')
    <script>
        $(document).ready(function () {
            $('#datatables-tbl').dataTable()
        });
    </script>
@endpush
