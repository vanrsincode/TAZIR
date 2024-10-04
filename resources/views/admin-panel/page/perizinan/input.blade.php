@extends('admin-panel.layouts.main')

@section('title', 'Input Perizinan Santri')

@section('content')
<section class="section">
     <div class="section-header irounded-1 shadow">
          <h1 class="text-dark">Input Izin</h1>
          <div class="section-header-breadcrumb">
               <div class="breadcrumb-item">Perizinan</div>
               <div class="breadcrumb-item text-dark active">Input Izin</div>
          </div>
     </div>

     <div class="row">
          <div class="col-12">
               <div class="card irounded-1 shadow">
                    <div class="card-header">
                         <h4 class="text-dark">Input Izin</h4>
                    </div>
                    <div class="card-body">
                         <div class="row">
                              <div class="form-group col-md-12">
                                   <label for="nm_santri">Nama Santri</label>
                                   <input type="text" class="form-control" name="nm_santri" id="nm_santri" value="{{ old('nm_santri') }}">
                                   <div class="invalid-feedback msg-nm_santri"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="alasan">Alasan</label>
                                   <select class="form-control" id="alasan" name="alasan" value="{{ old('alasan') }}">
                                        <option value="" selected>-- Pilih Alasan --</option>
                                   </select>
                                   <div class="invalid-feedback msg-alasan"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label>Waktu Mulai Perizinan</label>
                                   <input type="datetime-local" class="form-control">
                              </div>
                              <div class="form-group col-md-12">
                                   <label>Waktu Akhir Perizinan</label>
                                   <input type="datetime-local" class="form-control">
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="keterangan">Keterangan</label>
                                   <textarea class="form-control" name="Keterangan" id="Keterangan" style="height: 100px;" value="{{ old('keterangan') }}"></textarea>
                                   <div class="invalid-feedback msg-Keterangan"></div>
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
