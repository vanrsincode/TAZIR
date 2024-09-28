<div class="modal fade modal-roll" id="modalPerizinan" tabindex="-1" role="dialog" aria-labelledby="MHPerizinan" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title text-sm" id="MHPerizinan">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <form id="FPerizinan" method="POST" enctype="multipart/form-data">
                    <div class="modal-body pb-2">
                         <div class="row">
                              <div class="form-group col-md-12">
                                   <label for="santri">Santri</label>
                                   <input type="text" class="form-control" name="santri" id="santri" value="{{ old('santri') }}" placeholder="Masukan Santri">
                                   <div class="invalid-feedback msg-santri"></div>
                              </div>
                         </div>
                    </div>
                    <div class="modal-footer justify-content-between footerPerizinan">
                         <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
                    </div>
               </form>
          </div>
     </div>
</div>
