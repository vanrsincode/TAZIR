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
                <div class="col-6 col-sm-12 col-lg-6">
                    <div class="card author-box card-success">
                        <div class="card-body">
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
                                    <a href="#">Hasan Basri</a>
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

                <div class="col-6 col-sm-12 col-lg-6">
                    <div class="card profile-widget shadow-sm">
                        <div class="profile-widget-header text-center">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Pelanggaran</div>
                                    <div class="profile-widget-item-value">187</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Tunggakan Denda</div>
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
                                <p><strong>Konsekuensi:</strong> Santri ini tidak dapat mengambil rapor atau mengikuti ujian
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
            <div class="col-lg-12">
                <div class="card irounded-1 shadow">
                    <div class="card-header">
                        <h4 class="text-dark">Pelanggaran Belum Di Tebus</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="detail-santri-tbl1">
                                <thead class="bg-secondary text-dark">
                                    <tr style="text-align: center;">
                                        <th>#</th>
                                        <th>Pelanggaran</th>
                                        <th>Tanggal</th>
                                        <th>Foto</th>
                                        <th>Denda</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section 3: Tabel Pelanggaran Sudah Di Tebus -->
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card irounded-1 shadow">
                    <div class="card-header">
                        <h4 class="text-dark">Pelanggaran Di Tebus</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="detail-santri-tbl2">
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
                                </tbody>
                            </table>
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
