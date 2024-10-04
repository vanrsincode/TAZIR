<div class="modal fade modal-roll" id="modalIzin" tabindex="-1" role="dialog" aria-labelledby="MHIzin" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title text-sm" id="MHIzin">Izin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <form id="FIzin" method="POST" enctype="multipart/form-data">
                    <div class="modal-body pb-2">
                         <div class="row">
                              <div class="form-group col-md-12">
                                   <label for="level">Nama Izin</label>
                                   <input type="text" class="form-control" name="nama-izin" id="nama-izin" value="{{ old('nama-izin') }}">
                                   <div class="invalid-feedback msg-level"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="level">Jangka Waktu</label>
                                   <input type="number" class="form-control" name="jangka-waktu" id="jangka-waktu" value="{{ old('jangka-waktu') }}">
                                   <div class="invalid-feedback msg-level"></div>
                              </div>
                         </div>
                    </div>
                    <div class="modal-footer justify-content-between footerIzin">
                         <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
                    </div>
               </form>
          </div>
     </div>
</div>
