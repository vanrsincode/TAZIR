@extends('admin-panel.layouts.main')

@section('title', 'Input Pelanggaran')

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
                    <div class="card-body">
                         <div class="row">
                              <div class="form-group col-md-12">
                                   <label for="nm_santri">Nama Santri</label>
                                   <input type="text" class="form-control" name="nm_santri" id="nm_santri" value="{{ old('nm_santri') }}">
                                   <div class="invalid-feedback msg-nm_santri"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="larangan">Larangan</label>
                                   <select class="form-control" id="larangan" name="larangan" value="{{ old('larangan') }}">
                                        <option value="" selected>-- Pilih Larangan --</option>
                                   </select>
                                   <div class="invalid-feedback msg-larangan"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="pelanggaran">Pelanggaran</label>
                                   <select class="form-control" id="pelanggaran" name="pelanggaran" value="{{ old('pelanggaran') }}">
                                        <option value="" selected>-- Pilih Pelanggaran --</option>
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
                         <button class="btn btn-primary">Submit</button>
                    </div>
               </div>
          </div>
     </div>
</section>
@endsection
