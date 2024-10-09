@extends('admin-panel.layouts.main')

@section('title', 'Dashboard')

@push('css')
    <style>
        .card-body.box-profile {
            position: relative;
            text-align: center;
        }

        .profile-header {
            display: flex;
            align-items: left;
            justify-content: left;
            background-color: #dc3545;
            /* Red background */
            padding: 15px;
            /* Padding inside the background */
            border-radius: 10px;
            /* Optional: round corners */
            margin-bottom: 45px;
            /* Space below the profile header */
            position: relative;
            /* Make sure it's relative for the icon positioning */
        }

        .profile-header .background-icon {
            position: absolute;
            top: 50%;
            left: 80%;
            transform: translate(-50%, -50%);
            font-size: 85px;
            /* Adjust size as needed */
            color: rgba(17, 11, 11, 0.3);
            /* White color with 50% opacity */
            z-index: 0;
            /* Make sure it's behind other content */
        }

        .profile-header img {
            width: 100px;
            max-width: 35%;
            /* height: 130px; */
            margin-right: 15px;
            /* Space between the photo and the name */
            z-index: 1;
            /* Ensure it is above the background icon */
        }

        .profile-info {
            text-align: left;
            color: #fff;
            /* White text color for the name */
            z-index: 1;
            /* Ensure it is above the background icon */
        }

        .profile-info h3 {
            margin: 0;
            font-size: 1.4em;
        }

        .profile-info p {
            margin: 0;
            font-size: 1.2em;
            color: #ffc107;
            /* Yellow text color for the class */
        }

        ul.list-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0;
            margin: 0;
        }

        ul.list-group .list-group-item {
            border: none;
            background: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 1.5em;
            margin: 0;
            padding: 0;
        }

        ul.list-group .list-group-item b {
            margin-top: 25px;
            /* Space between number and label */
            font-size: 1.2em;
        }

        ul.list-group .list-group-item a {
            font-size: 3em;
            /* Size for the violation number */
            color: #dc3545;
            /* Red color for the number */
            font-weight: bold;
        }
    </style>
@endpush

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 irounded-1 shadow">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <div class="card-wrap mt-2">
                        <div class="card-header">
                            <h4>Pelanggaran</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 irounded-1 shadow">
                    <div class="card-icon bg-info">
                        <i class="fas fa-id-badge"></i>
                    </div>
                    <div class="card-wrap mt-2">
                        <div class="card-header">
                            <h4>Perizinan</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 irounded-1 shadow">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="card-wrap mt-2">
                        <div class="card-header">
                            <h4>Santri</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1 irounded-1 shadow">
                    <div class="card-icon bg-secondary">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="card-wrap mt-2">
                        <div class="card-header">
                            <h4>Pengguna</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bar Chart --}}
            <div class="col-12 hide-on-small"">
                <div class=" card irounded-1 shadow">
                    <div class="card-header">
                        <h4 class="text-dark">Bar Pelanggaran Dan Perizinan Tahun {{ \Carbon\Carbon::now()->format('Y') }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <canvas id="chartPelanggaranPerizinan" height="150px"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card irounded-1 shadow">
                    <div class="card-header">
                        <h4 class="text-dark">Santri Paling Bermasalah</h4>
                    </div>
                    <div class="card-body box-profile">
                        <div class="profile-header d-flex align-items-center">
                            <div class="background-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <img class="" id="top-santri-foto" src="{{ asset('adm-panel') }}/assets/img/contoh.png"
                                alt="User profile picture">
                            <div class="profile-info">
                                <h3 class="profile-username" id="top-santri-nama">Nama Santri</h3>
                                <p class="text" id="top-santri-kelas">kelas</p>
                            </div>
                        </div>
                        <ul class="list-group list-group-unbordered mb-4">
                            <li class="list-group-item">
                                <a class="text-danger text-bold" id="top-santri-total">12</a>
                                <b>Pelanggaran</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card gradient-bottom irounded-1 shadow">
                    <div class="card-header">
                        <h4 class="text-dark">Top 5 Santri</h4>
                    </div>
                    <div class="card-body" id="top-5-scroll">
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('adm-panel') }}/assets/img/contoh.png" alt="product">
                                <div class="media-body">
                                    <div class="media-title mt-1">Nama Santri</div>
                                    <span>12 Pelanggaran</span>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('adm-panel') }}/assets/img/contoh.png" alt="product">
                                <div class="media-body">
                                    <div class="media-title mt-1">Nama Santri</div>
                                    <span>12 Pelanggaran</span>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('adm-panel') }}/assets/img/contoh.png" alt="product">
                                <div class="media-body">
                                    <div class="media-title mt-1">Nama Santri</div>
                                    <span>12 Pelanggaran</span>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('adm-panel') }}/assets/img/contoh.png" alt="product">
                                <div class="media-body">
                                    <div class="media-title mt-1">Nama Santri</div>
                                    <span>12 Pelanggaran</span>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded" width="55"
                                    src="{{ asset('adm-panel') }}/assets/img/contoh.png" alt="product">
                                <div class="media-body">
                                    <div class="media-title mt-1">Nama Santri</div>
                                    <span>12 Pelanggaran</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer pt-3 d-flex justify-content-center">
                        <a href="" class="ticket-item ticket-more text-dark">
                            View All <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js_vendor')
    <script src="{{ asset('adm-panel/vendor') }}/chart.js/dist/Chart.min.js"></script>
@endpush

@push('js')
    <script>
        let ctx = document.getElementById("chartPelanggaranPerizinan").getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember"
                ],
                datasets: [{
                    label: 'Perizinan',
                    data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                    borderWidth: 2,
                    backgroundColor: '#006FEB',
                    borderColor: '#006FEB',
                    borderWidth: 2.5,
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }, {
                    label: 'Pelanggaran',
                    data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                    borderWidth: 2,
                    backgroundColor: '#fc544b',
                    borderColor: '#fc544b',
                    borderWidth: 2.5,
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }]
            },
        });
    </script>
@endpush
