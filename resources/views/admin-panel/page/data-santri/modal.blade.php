<div class="modal fade modal-roll" id="modalDataSantri" tabindex="-1" role="dialog" aria-labelledby="MHDataSantri" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title text-sm" id="MHDataSantri">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <form id="FDataSantri" method="POST" enctype="multipart/form-data">
                    <div class="modal-body pb-2">
                         <div class="row">
                              <div class="form-group col-md-12">
                                   <label for="nis">NIS</label>
                                   <input type="text" class="form-control" name="nis" id="nis" value="{{ old('nis') }}">
                                   <div class="invalid-feedback msg-nis"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="nama">Nama</label>
                                   <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
                                   <div class="invalid-feedback msg-nama"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="kelas">Kelas</label>
                                   <select class="form-control select2" id="kelas" name="kelas" value="{{ old('kelas') }}">
                                        <option value="" selected>-- Pilih Kelas --</option>
                                   </select>
                                   <div class="invalid-feedback msg-kelas"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="alamat">Alamat</label>
                                   <textarea class="form-control" name="alamat" id="alamat" style="height: 100px;" value="" placeholder="Masukan Alamat Lengkap"></textarea>
                                   <div class="invalid-feedback msg-alamat"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="wali_santri">Wali Santri</label>
                                   <input type="text" class="form-control" name="wali_santri" id="wali_santri" value="{{ old('wali_santri') }}">
                                   <div class="invalid-feedback msg-wali_santri"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="no_wali">No. Wali</label>
                                   <input type="text" class="form-control" name="no_wali" id="no_wali" value="{{ old('no_wali') }}">
                                   <div class="invalid-feedback msg-no_wali"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="foto_santri">Foto</label>
                                   <input type="file" class="form-control" name="foto_santri" id="foto_santri" value="{{ old('foto_santri') }}">
                                   <div class="invalid-feedback msg-foto_santri"></div>
                              </div>
                         </div>
                    </div>
                    <div class="modal-footer justify-content-between footerDataSantri">
                         <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
                    </div>
               </form>
          </div>
     </div>
</div>
