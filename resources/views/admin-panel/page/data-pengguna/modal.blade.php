<div class="modal fade modal-roll" id="modalDataPengguna" tabindex="-1" role="dialog" aria-labelledby="MHDataPengguna" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title text-sm" id="MHDataPengguna">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <form id="FDataPengguna" method="POST" enctype="multipart/form-data">
                    <div class="modal-body pb-2">
                         <div class="row">
                              <div class="form-group col-md-12">
                                   <label for="nama">Nama</label>
                                   <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}">
                                   <div class="invalid-feedback msg-nama"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="username">Username</label>
                                   <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}">
                                   <div class="invalid-feedback msg-username"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="password">Password</label>
                                   <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
                                   <div class="invalid-feedback msg-password"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="conf_password">Konfirmasi Password</label>
                                   <input type="conf_password" class="form-control" name="conf_password" id="conf_password" value="{{ old('conf_password') }}">
                                   <div class="invalid-feedback msg-conf_password"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="role">Role</label>
                                   <select class="form-control" id="role" name="role" value="{{ old('role') }}">
                                        <option value="" selected>-- Pilih Role --</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Pengurus">Pengurus</option>
                                        <option value="Pengasuh">Pengasuh</option>
                                   </select>
                                   <div class="invalid-feedback msg-role"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="alamat">Alamat</label>
                                   <textarea class="form-control" name="alamat" id="alamat" style="height: 100px;" value="" placeholder="Masukan Alamat Lengkap"></textarea>
                                   <div class="invalid-feedback msg-alamat"></div>
                              </div>
                              <div class="form-group col-md-12">
                                   <label for="ft_profil">Foto Profil</label>
                                   <input type="file" class="form-control" name="ft_profil" id="ft_profil" value="{{ old('ft_profil') }}">
                                   <div class="invalid-feedback msg-ft_profil"></div>
                              </div>
                         </div>
                    </div>
                    <div class="modal-footer justify-content-between footerDataPengguna">
                         <button type="button" class="btn btn-warning" data-dismiss="modal">Keluar</button>
                    </div>
               </form>
          </div>
     </div>
</div>
