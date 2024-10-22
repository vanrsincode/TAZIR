@extends('admin-panel.layouts.main')

@section('title', 'Input Pelanggaran')

@push('css')
<link rel="stylesheet" href="{{ asset('adm-panel') }}/assets/css/components/18-select2.css">
@endpush

@push('css_vendor')
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
                    <form id="FSPelanggaran" method="POST" enctype="multipart/form-data">
                         <div class="card-body">
                              <div class="row">
                                   <div class="form-group col-md-12">
                                        <label for="santri">Santri</label>
                                        <select class="form-control select2" id="santri" name="santri">
                                             <option value="" selected>-- Pilih Santri --</option>
                                             @foreach ($dataSantri as $santri)
                                             <option value="{{ $santri->id }}">{{ $santri->nis }} | {{ $santri->nama_santri }} | {{ $santri->kelas->nama_kelas }}</option>
                                             @endforeach
                                        </select>
                                        <div class="invalid-feedback msg-santri"></div>
                                   </div>
                                   <div class="form-group col-md-12">
                                        <label for="larangan">Larangan</label>
                                        <select class="form-control select2" id="larangan" name="larangan">
                                             <option value="" selected>-- Pilih Larangan --</option>
                                             @foreach ($dataLarangan as $larangan)
                                             <option value="{{ $larangan }}">{{ $larangan }}</option>
                                             @endforeach
                                        </select>
                                        <div class="invalid-feedback msg-larangan"></div>
                                   </div>
                                   <div class="form-group col-md-12">
                                        <label for="pelanggaran">Pelanggaran</label>
                                        <select class="form-control select2 disabled" id="pelanggaran" name="pelanggaran" disabled>
                                             <option value="" selected>-- Pilih Pelanggaran --</option>
                                             @foreach ($dataPelanggaran as $pelanggaran)
                                             <option value="{{ $pelanggaran->id }}" data-larangan="{{ $pelanggaran->larangan }}">{{ $pelanggaran->nama_violasi }}
                                             </option>
                                             @endforeach
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
                    </form>
               </div>
          </div>
     </div>
</section>
@endsection

@push('js_vendor')
<script src="{{ asset('adm-panel/vendor') }}/select2/dist/js/select2.full.min.js"></script>
@endpush

@push('js')
<script>
     $(document).ready(function() {
          $('#larangan').on('change', function() {
               var selectedLarangan = $(this).val();
               var hasMatchingData = false; // Penanda jika ada data yang sesuai

               $('#pelanggaran option').each(function() {
                    var pelanggaranLarangan = $(this).data('larangan');

                    // Cek apakah pelanggaran sesuai dengan larangan yang dipilih
                    if (pelanggaranLarangan == selectedLarangan) {
                         $(this).show();
                         hasMatchingData = true; // Tandai bahwa ada data yang sesuai
                    } else {
                         $(this).hide();
                    }
               });

               // Jika ada data yang sesuai, aktifkan select pelanggaran
               if (hasMatchingData) {
                    $('#pelanggaran').removeAttr('disabled');
               } else {
                    // Jika tidak ada data yang sesuai, disable dan kosongkan select pelanggaran
                    $('#pelanggaran').attr('disabled', 'disabled').val(null).trigger('change');
               }
          });

     });

</script>
@endpush
