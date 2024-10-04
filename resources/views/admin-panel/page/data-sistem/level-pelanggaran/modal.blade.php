<div class="modal fade modal-roll" id="modalLevelPelanggaran" tabindex="-1" role="dialog" aria-labelledby="MHLevelPelanggaran" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title text-sm" id="MHLevelPelanggaran">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <form id="FLevelPelanggaran" method="POST" enctype="multipart/form-data">
                    <div class="modal-body pb-2">
                         <div class="row">
                              <div class="form-group col-md-12">
                                   <label for="level">Level</label>
                                   <input type="text" class="form-control" name="level" id="level" value="{{ old('level') }}">
                                   <div class="invalid-feedback msg-level"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="denda">Denda</label>
                                   <input type="text" class="form-control" name="denda" id="denda" value="{{ old('denda') }}">
                                   <div class="invalid-feedback msg-denda"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="hukuman">Hukuman</label>
                                   <input type="text" class="form-control" name="hukuman" id="hukuman" value="{{ old('hukuman') }}">
                                   <div class="invalid-feedback msg-hukuman"></div>
                              </div>
                         </div>
                    </div>
                    <div class="modal-footer justify-content-between footerLevelPelanggaran">
                         <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
                    </div>
               </form>
          </div>
     </div>
</div>
