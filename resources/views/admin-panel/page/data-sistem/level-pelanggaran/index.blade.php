@extends('admin-panel.layouts.main')

@section('title', 'Level Pelanggaran')

@push('css_vendor')
@include('admin-panel.layouts.vendor.cssVendor')
@endpush

@section('content')
<section class="section">
     <div class="section-header irounded-1 shadow">
          <h1 class="text-dark">Level Pelanggaran</h1>
          <div class="section-header-breadcrumb">
               <div class="breadcrumb-item">Data Sistem</div>
               <div class="breadcrumb-item text-dark active">Level Pelanggaran</div>
          </div>
     </div>

     <div class="row">
          <div class="col-12">
               <div class="card irounded-1 shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <p class="card-title font-weight-bold text-dark" style="white-space: nowrap;">Tabel Level Pelanggaran</p>
                         <button type="button" class="Btn" id="createLevel">
                              <div class="btn-ico-plus">
                                   <span class="fas fa-plus"></span>
                              </div>

                              <div class="btn-text">Tambah Data</div>
                         </button>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-striped dt-responsive nowrap" id="level-pelanggaran-tbl" style="width: 100%;">
                                   <thead class="bg-secondary text-dark">
                                        <tr style="text-align-last: center;">
                                             <th width="5px">#</th>
                                             <th>Level</th>
                                             <th>Denda</th>
                                             <th>Hukuman</th>
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
@include('admin-panel.page.data-sistem.level-pelanggaran.modal')
@endsection

@push('js_vendor')
@include('admin-panel.layouts.vendor.jsVendor')
@endpush

@push('js')
@include('admin-panel.layouts.vendor.jsCustom')
<script src="{{ asset('javascript/page/data-sistem/level/main.js') }}"></script>
@endpush
