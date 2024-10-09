@extends('admin-panel.layouts.main')

@section('title', 'Detail Santri')

@push('css_vendor')
    @include('admin-panel.layouts.vendor.cssVendor')
    <link rel="stylesheet" href="{{ asset('adm-panel/vendor') }}/bootstrap-social/bootstrap-social.css">
@endpush

@section('content')
    <section class="section">
        <div class="section-header irounded-1 shadow">
            <h1 class="text-dark">Detail Santri</h1>
        </div>

        <!-- Section 1: Detail Santri -->
        <div class="section-body">
            <h2 class="section-title">Nama Santri</h2>
            <p class="section-lead">Components relating to users, lists of users and so on.</p>

            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="card author-box card-success">
                        <div class="card-body mt-2">
                            <div class="author-box-left">
                                <img alt="image" src="{{ asset('adm-panel') }}/assets/img/avatar/avatar-1.png"
                                    class="rounded-circle author-box-picture">
                                <div class="clearfix"></div>
                                <a href="#" class="btn btn-primary mt-3 follow-btn"
                                    data-follow-action="alert('follow clicked');"
                                    data-unfollow-action="alert('unfollow clicked');">Follow</a>
                            </div>
                            <div class="author-box-details">
                                <div class="author-box-name">
                                    <a href="#" class="text-success">Hasan Basri</a>
                                </div>
                                <div class="author-box-job">Kelas</div>
                                <div class="author-box-description">
                                    <p><strong>NIS:</strong> NIS Santri<br>
                                        <strong>Alamat:</strong> Alamat Santri<br>
                                        <strong>Nama Wali Santri:</strong> Nama Wali Santri<br>
                                        <strong>No. Wali Santri:</strong> No. Wali Santri
                                    </p>
                                </div>
                                <div class="mb-2 mt-3">
                                    <div class="text-small font-weight-bold">Follow Hasan On</div>
                                </div>
                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-github">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <div class="w-100 d-sm-none"></div>
                                <div class="float-right mt-sm-0 mt-3">
                                    <a href="#" class="btn">View Posts <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="card profile-widget shadow-sm mt-0 card-success">
                        <div class="profile-widget-header text-center">
                            <div class="profile-widget-items mt-2">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Pelanggaran</div>
                                    <div class="profile-widget-item-value">187</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Tunggakan</div>
                                    <div class="profile-widget-item-value">6,8K</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Izin</div>
                                    <div class="profile-widget-item-value">2,1K</div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget-description pb-0">
                            <div class="profile-widget-name">
                                Nama
                                <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> Kelas
                                </div>
                                <div class="text-muted d-inline font-weight-normal">
                                    <p>Kami sampaikan bahwa <strong>Nama</strong> telah tercatat melakukan
                                        beberapa pelanggaran yang memerlukan perhatian. Total denda yang terakumulasi akibat
                                        pelanggaran tersebut adalah <strong>Rp.000000</strong>.</p>
                                    <p><strong>Konsekuensi:</strong> Santri ini tidak dapat mengambil rapor atau mengikuti
                                        ujian
                                        tamrin dan ujian akhir apabila denda pelanggarannya tidak dilunaskan.</p>
                                </div>
                            </div>
                            <div class="mt-3 mb-3">
                                <a href="#" class="btn btn-primary mr-3">
                                    <i class="fas fa-print"></i> Cetak Laporan
                                </a>
                                <a href="https://wa.me/6281234567890?text=Hello" target="_blank" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i> Kirim WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Section 2: Tabel Pelanggaran Belum Di Tebus -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card irounded-1 shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <p class="card-title font-weight-bold text-dark" style="white-space: nowrap;">Tabel Pelanggaran</p>
                        {{-- <button type="button" class="Btn" id="create" >
                            <div class="btn-ico-plus">
                                <span class="fas fa-plus"></span>
                            </div>
                            <div class="btn-text">Tambah Data</div>
                        </button> --}}
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills" id="userTabs">
                            <li class="nav-item">
                                <a class="nav-link nav-link-blm-tebus active" data-toggle="tab" href="#tab-blm-tebus">Belum Ditebus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-sdh-tebus" data-toggle="tab"
                                    href="#tab-sdh-tebus">Sudah Ditebus</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade tab-pane-blm-tebus show active" id="tab-blm-tebus" role="tabpanel">
                                <div class="table-responsive mt-3 tab-blm-tebus">
                                    <table class="table table-striped dt-responsive nowrap" id="blm-tebus-tbl"
                                        style="width: 100%;">
                                        <thead class="bg-secondary text-dark">
                                            <tr style="text-align-last: center;">
                                                <th>#</th>
                                                <th>Pelanggaran</th>
                                                <th>Tanggal</th>
                                                <th>Foto</th>
                                                <th>Denda</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align-last: center;">
                                                <td>#</td>
                                                <td>#</td>
                                                <td>#</td>
                                                <td>#</td>
                                                <td>#</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade tab-pane-sdh-tebus" id="tab-sdh-tebus" role="tabpanel">
                                <div class="table-responsive mt-3 tab-sdh-tebus">
                                    <table class="table table-striped dt-responsive nowrap" id="sdh-tebus-tbl" style="width: 100%;">
                                        <thead class="bg-secondary text-dark">
                                            <tr style="text-align: center;">
                                                <th>#</th>
                                                <th>Pelanggaran</th>
                                                <th>Tanggal</th>
                                                <th>Foto</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align-last: center;">
                                                <td>#</td>
                                                <td>#</td>
                                                <td>#</td>
                                                <td>#</td>
                                                <td>#</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modal')
    @include('admin-panel.page.data-santri.modal')
@endsection

@push('js_vendor')
    @include('admin-panel.layouts.vendor.jsVendor')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $('#detail-santri-tbl1').dataTable();
        });
        $(document).ready(function() {
            $('#detail-santri-tbl2').dataTable();
        });
    </script>
@endpush
