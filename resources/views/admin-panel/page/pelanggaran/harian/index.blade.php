@extends('admin-panel.layouts.main')

@section('title', 'Pelanggaran Santri')

@push('css_vendor')
@include('admin-panel.layouts.vendor.cssVendor')
@endpush

@section('content')
<section class="section">
     <div class="section-header irounded-1 shadow">
          <h1 class="text-dark">Pelanggaran Harian Santri </h1>
          <div class="section-header-breadcrumb">
               <div class="breadcrumb-item">Pelanggaran</div>
               <div class="breadcrumb-item text-dark active">Harian</div>
          </div>
     </div>

     <div class="row">
          <div class="col-12">
               <div class="card irounded-1 shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <p class="card-title font-weight-bold text-dark" style="white-space: nowrap;">Tabel Pelanggaran Harian Santri</p>
                         <a href="{{ route('pelanggaran.create') }}" class="Btn" id="createPelanggaranHarian">
                              <div class="btn-ico-plus">
                                   <span class="fas fa-plus"></span>
                              </div>
                              <div class="btn-text">Tambah Data</div>
                         </a>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-striped dt-responsive nowrap" id="pelanggaran-harian-tbl" style="width: 100%;">
                                   <thead class="bg-secondary text-dark">
                                        <tr style="text-align-last: center;">
                                             <th width="5px">#</th>
                                             <th>NIS</th>
                                             <th>Nama Santri</th>
                                             <th>Kelas</th>
                                             <th>Pelanggaran</th>
                                             <th>Waktu</th>
                                             <th>Foto</th>
                                             <th>Status</th>
                                             <th width="90px">Aksi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr style="text-align-last: center;">
                                             <td>#</td>
                                             <td>#</td>
                                             <td>#</td>
                                             <td>#</td>
                                             <td>#</td>
                                             <td>#</td>
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

{{-- @section('modal')
@include('admin-panel.page.data-sistem.Pelanggaran.modal')
@endsection --}}

@push('js_vendor')
@include('admin-panel.layouts.vendor.jsVendor')
@endpush

@push('js')
<script>
     $(document).ready(function() {
          $('#pelanggaran-harian-tbl').dataTable()

          $('body').on('click touchstart', '#createPelanggaranHarian', function() {
               $('#modalPelanggaranSantri').modal('show')
          });
     });

</script>
@endpush
