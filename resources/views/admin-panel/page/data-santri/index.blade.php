@extends('admin-panel.layouts.main')

@section('title', 'Data Santri')

@push('css_vendor')
@include('admin-panel.layouts.vendor.cssVendor')
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
                         <button type="button" class="Btn" id="createDataSantri">
                              <div class="btn-ico-plus">
                                   <span class="fas fa-plus"></span>
                              </div>
                              <div class="btn-text">Tambah Data</div>
                         </button>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-striped dt-responsive nowrap" id="data-santri-tbl" style="width: 100%;">
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
                                             <td>
                                                  <a href="{{ route('data-santri.detail.index') }}" class="btn btn-primary btn-sm">Detail</a>
                                                  {{-- <a href="#" class="btn btn-primary btn-sm">Detail</a> --}}
                                              </td>
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
@include('admin-panel.page.data-santri.modal')
@endsection

@push('js_vendor')
@include('admin-panel.layouts.vendor.jsVendor')
@endpush

@push('js')
<script>
     $(document).ready(function() {
          $('#data-santri-tbl').dataTable()

          $('body').on('click touchstart', '#createDataSantri', function() {
               $('#modalDataSantri').modal('show')
          });
     });
</script>
@endpush
