<div class="modal fade modal-roll" id="modalKelasMadrasah" tabindex="-1" role="dialog" aria-labelledby="MHKelasMadrasah" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title text-sm" id="MHKelasMadrasah">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <form id="FKelasMadrasah" method="POST" enctype="multipart/form-data">
                    <div class="modal-body pb-2">
                         <div class="row">
                              <div class="form-group col-md-12">
                                   <label for="level">Nama Kelas</label>
                                   <input type="text" class="form-control" name="nama-kelas" id="nama-kelas" value="{{ old('nama-kelas') }}">
                                   <div class="invalid-feedback msg-level"></div>
                              </div>
                         </div>
                    </div>
                    <div class="modal-footer justify-content-between footerKelasMadrasah">
                         <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
                    </div>
               </form>
          </div>
     </div>
</div>
