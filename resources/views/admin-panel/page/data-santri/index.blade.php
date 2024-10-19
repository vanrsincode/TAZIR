@extends('admin-panel.layouts.main')

@section('title', 'Data Santri')

@push('css')
    <link rel="stylesheet" href="{{ asset('adm-panel') }}/assets/css/components/18-select2.css">
@endpush

@push('css_vendor')
    @include('admin-panel.layouts.vendor.cssVendor')
    <link rel="stylesheet" href="{{ asset('adm-panel/vendor') }}/select2/dist/css/select2.min.css">
@endpush

@section('content')
    <section class="section">
        <div class="section-header irounded-1 shadow">
            <h1 class="text-dark">Data Santri</h1>
            {{-- <div class="section-header-breadcrumb">
               <div class="breadcrumb-item">Data Sistem</div>
               <div class="breadcrumb-item text-dark active">Data Santri</div>
          </div> --}}
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card irounded-1 shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <p class="card-title font-weight-bold text-dark" style="white-space: nowrap;">Tabel Data Santri</p>
                        <button type="button" class="Btn" id="createSantri">
                            <div class="btn-ico-plus">
                                <span class="fas fa-plus"></span>
                            </div>
                            <div class="btn-text">Tambah Data</div>
                        </button>
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-pills" id="userTabs">
                            <li class="nav-item">
                                <a class="nav-link nav-link-putra active" data-toggle="tab" href="#tab-putra">Putra</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-putri" data-toggle="tab" href="#tab-putri">Putri</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade tab-pane-putra show active" id="tab-putra" role="tabpanel">
                                <div class="table-responsive mt-3 tab-putra">
                                    <table class="table table-striped dt-responsive nowrap" id="santri-putra-tbl"
                                        style="width: 100%;">
                                        <thead class="bg-secondary text-dark">
                                            <tr style="text-align-last: center;">
                                                <th width="5px">#</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>Wali Santri</th>
                                                <th>No. Wali</th>
                                                <th>Foto</th>
                                                <th width="90px">Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade tab-pane-putri" id="tab-putri" role="tabpanel">
                                <div class="table-responsive mt-3 tab-putri">
                                    <table class="table table-striped dt-responsive nowrap" id="santri-putri-tbl"
                                        style="width: 100%;">
                                        <thead class="bg-secondary text-dark">
                                            <tr style="text-align: center;">
                                                <th width="5px">#</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>Wali Santri</th>
                                                <th>No. Wali</th>
                                                <th>Foto</th>
                                                <th width="90px">Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modal')
    @include('admin-panel.page.data-santri.modal')
@endsection

@push('js_vendor')
    @include('admin-panel.layouts.vendor.jsVendor')
    <script src="{{ asset('adm-panel/vendor') }}/select2/dist/js/select2.full.min.js"></script>
@endpush

@push('js')
@include('admin-panel.layouts.vendor.jsCustom')
<script src="{{ asset('javascript/page/santri/main.js') }}"></script>
@endpush
