@extends('admin-panel.layouts.main')

@section('title', 'Klasifikasi Violasi')

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
          <h1 class="text-dark">Klasifikasi Violasi</h1>
          <div class="section-header-breadcrumb">
               <div class="breadcrumb-item">Data Sistem</div>
               <div class="breadcrumb-item text-dark active">Klasifikasi Violasi</div>
          </div>
     </div>

     <div class="row">
          <div class="col-12">
               <div class="card irounded-1 shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <p class="card-title font-weight-bold text-dark" style="white-space: nowrap;">Tabel Klasifikasi Violasi</p>
                         <button type="button" class="Btn" id="createKlasifikasiViolasi">
                              <div class="btn-ico-plus">
                                   <span class="fas fa-plus"></span>
                              </div>
                              <div class="btn-text">Tambah Data</div>
                         </button>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-striped dt-responsive nowrap" id="klasifikasi-violasi-tbl" style="width: 100%;">
                                   <thead class="bg-secondary text-dark">
                                        <tr style="text-align-last: center;">
                                             <th width="5px">#</th>
                                             <th>Nama</th>
                                             <th>Larangan</th>
                                             <th>Level</th>
                                             <th>Denda</th>
                                             <th>Hukuman</th>
                                             <th>Max</th>
                                             <th width="90px">Aksi</th>
                                        </tr>
                                   </thead>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>
@endsection

@section('modal')
@include('admin-panel.page.data-sistem.klasifikasi-violasi.modal')
@endsection

@push('js_vendor')
@include('admin-panel.layouts.vendor.jsVendor')
<script src="{{ asset('adm-panel/vendor') }}/select2/dist/js/select2.full.min.js"></script>
@endpush

@push('js')
@include('admin-panel.layouts.vendor.jsCustom')
<script src="{{ asset('javascript/page/data-sistem/violasi/main.js') }}"></script>
@endpush
