@extends('admin-panel.layouts.main')

@section('title', 'Input Pelanggaran')

@push('css')
<link rel="stylesheet" href="{{ asset('adm-panel') }}/assets/css/components/18-select2.css">
@endpush

@push('css_vendor')
<link rel="stylesheet" href="{{ asset('adm-panel/vendor') }}/izitoast/dist/css/iziToast.min.css">
<link rel="stylesheet" href="{{ asset('adm-panel/vendor') }}/select2/dist/css/select2.min.css">
@endpush

@section('content')
<section class="section">
     <div class="section-header irounded-1 shadow">
          <h1 class="text-dark">Input Pelanggaran</h1>
          <div class="section-header-breadcrumb">
               <div class="breadcrumb-item">Pelanggaran</div>
               <div class="breadcrumb-item text-dark active">Input Pelanggaran</div>
          </div>
     </div>

     <div class="row">
          <div class="col-12">
               <div class="card irounded-1 shadow">
                    <div class="card-header">
                         <h4 class="text-dark">Input Pelanggaran</h4>
                    </div>
                    <form id="FPelanggaran" method="POST" enctype="multipart/form-data">
                         <div class="card-body">
                              <div class="row">
                                   <div class="form-group col-md-12">
                                        <label for="santri">Santri</label>
                                        <select class="form-control select2" id="santri" name="santri">

                                        </select>
                                        <div class="invalid-feedback msg-santri"></div>
                                   </div>
                                   <div class="form-group col-md-12">
                                        <label for="larangan">Larangan</label>
                                        <select class="form-control select2" id="larangan" name="larangan">

                                        </select>
                                        <div class="invalid-feedback msg-larangan"></div>
                                   </div>

                                   <div class="form-group col-md-12">
                                        <label for="pelanggaran">Pelanggaran</label>
                                        <select class="form-control select2" id="pelanggaran" name="pelanggaran" disabled>

                                        </select>
                                        <div class="invalid-feedback msg-pelanggaran"></div>
                                   </div>
                                   <div class="form-group col-md-12">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ old('tanggal') }}">
                                        <div class="invalid-feedback msg-tanggal"></div>
                                   </div>
                                   <div class="form-group col-md-12">
                                        <label for="ft_pelanggaran">Foto</label>
                                        <input type="file" class="form-control" name="ft_pelanggaran" id="ft_pelanggaran">
                                        <div class="invalid-feedback msg-ft_pelanggaran"></div>
                                   </div>
                              </div>
                         </div>
                         <div class="card-footer text-right">
                              <button type="submit" class="btn btn-primary btn-form">Submit</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</section>
@endsection

@push('js_vendor')
<script src="{{ asset('adm-panel/vendor') }}/izitoast/dist/js/iziToast.min.js"></script>
<script src="{{ asset('adm-panel/vendor') }}/select2/dist/js/select2.full.min.js"></script>
@endpush

@push('js')
@include('admin-panel.layouts.vendor.jsCustom')
<script src="{{ asset('javascript/page/pelanggaran/create.js') }}"></script>
@endpush
