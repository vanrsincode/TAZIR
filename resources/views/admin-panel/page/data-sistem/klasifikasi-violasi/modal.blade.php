<div class="modal fade modal-roll" id="modalKlasifikasiViolasi" tabindex="-1" role="dialog" aria-labelledby="MHKlasifikasiViolasi" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title text-sm" id="MHKlasifikasiViolasi">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <form id="FKlasifikasiViolasi" method="POST" enctype="multipart/form-data">
                    <div class="modal-body pb-2">
                         <div class="row">
                              <div class="form-group col-md-12">
                                   <label for="nama">Nama</label>
                                   <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
                                   <div class="invalid-feedback msg-nama"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="larangan">Larangan</label>
                                   <select class="form-control" id="larangan" name="larangan" value="{{ old('larangan') }}">
                                        <option value="" selected>-- Pilih Larangan --</option>
                                   </select>
                                   <div class="invalid-feedback msg-larangan"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="level">Level</label>
                                   <select class="form-control" id="level" name="level" value="{{ old('level') }}">
                                        <option value="" selected>-- Pilih Level --</option>
                                   </select>
                                   <div class="invalid-feedback msg-level"></div>
                              </div>
                         </div>
                    </div>
                    <div class="modal-footer justify-content-between footerKlasifikasiViolasi">
                         <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
                    </div>
               </form>
          </div>
     </div>
</div>
