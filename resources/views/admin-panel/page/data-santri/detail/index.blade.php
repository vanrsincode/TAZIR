@extends('admin-panel.layouts.main')

@section('title', 'Detail Santri')

@push('css_vendor')
    @include('admin-panel.layouts.vendor.cssVendor')
@endpush

@section('content')
    <section class="section">
        <div class="section-header irounded-1 shadow">
            <h1 class="text-dark">Detail Santri</h1>
        </div>

        <!-- Section 1: Detail Santri -->
        <div class="section-body">
            <h2 class="section-title">Users</h2>
            <p class="section-lead">Components relating to users, lists of users and so on.</p>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-5">
                    <div class="card author-box card-primary">
                        <div class="card-body">
                            <div class="author-box-left">
                                <img alt="image" src="../assets/img/avatar/avatar-1.png"
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
                                <div class="author-box-job">Web Developer</div>
                                <div class="author-box-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</p>
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
            </div>

            <div class="col-6 col-sm-6 col-lg-5">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image" src="../assets/img/avatar/avatar-1.png"
                            class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Posts</div>
                                <div class="profile-widget-item-value">187</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Followers</div>
                                <div class="profile-widget-item-value">6,8K</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Following</div>
                                <div class="profile-widget-item-value">2,1K</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description pb-0">
                        <div class="profile-widget-name">Hasan Basri <div class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div> Web Developer
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                    </div>
                    <div class="card-footer text-center pt-0">
                        <div class="font-weight-bold mb-2 text-small">Follow Hasan On</div>
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
                    </div>
                </div>

            </div>
        </div>

        <!-- Section 2: Tabel Santri -->
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card irounded-1 shadow">
                    <div class="card-header">
                        <h4 class="text-dark">Tabel Informasi Tambahan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="detail-santri-tbl">
                                <thead class="bg-secondary text-dark">
                                    <tr style="text-align: center;">
                                        <th>#</th>
                                        <th>Kolom 1</th>
                                        <th>Kolom 2</th>
                                        <th>Kolom 3</th>
                                        <th>Kolom 4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table content will be added later -->
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
            $('#detail-santri-tbl').dataTable();
        });
    </script>
@endpush
