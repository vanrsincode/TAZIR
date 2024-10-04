@extends('admin-panel.layouts.main')

@section('title', 'Data Pengguna')

@push('css_vendor')
@include('admin-panel.layouts.vendor.cssVendor')
@endpush

@section('content')
<section class="section">
     <div class="section-header irounded-1 shadow">
          <h1 class="text-dark">Data Pengguna</h1>
          {{-- <div class="section-header-breadcrumb">
               <div class="breadcrumb-item">Data Sistem</div>
               <div class="breadcrumb-item text-dark active">Data Pengguna</div>
          </div> --}}
     </div>

     <div class="row">
          <div class="col-12">
               <div class="card irounded-1 shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <p class="card-title font-weight-bold text-dark" style="white-space: nowrap;">Tabel Data Pengguna</p>
                         <button type="button" class="Btn" id="createDataPengguna">
                              <div class="btn-ico-plus">
                                   <span class="fas fa-plus"></span>
                              </div>
                              <div class="btn-text">Tambah Data</div>
                         </button>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-striped dt-responsive nowrap" id="data-pengguna-tbl" style="width: 100%;">
                                   <thead class="bg-secondary text-dark">
                                        <tr style="text-align-last: center;">
                                             <th>Foto Profil</th>
                                             <th>Nama</th>
                                             <th>Username</th>
                                             <th>Alamat</th>
                                             <th>No. Telp</th>
                                             <th>Role</th>
                                             <th>Last Login</th>
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

@section('modal')
@include('admin-panel.page.data-pengguna.modal')
@endsection

@push('js_vendor')
@include('admin-panel.layouts.vendor.jsVendor')
@endpush

@push('js')
<script>
     $(document).ready(function() {
          $('#data-pengguna-tbl').dataTable()

          $('body').on('click touchstart', '#createDataPengguna', function() {
               $('#modalDataPengguna').modal('show')
          });
     });
</script>
@endpush