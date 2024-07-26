@extends('app')
@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 ms-2 mb-3 mt-3"><strong> Dashboard </strong></h1>
        <hr style="color: grey">
        <h4 class="h4 mb-3 ms-2"><strong> Statistik Projects </strong></h4>
        <div class="row">
            <div class="col-xl-6 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="card ms-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Minggu Ini</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="bar-chart-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">2.382</h1>
                                </div>
                            </div>
                            <div class="card ms-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Repo Github Aktif</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="github"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">14.212</h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card ms-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Bulan Ini</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="bar-chart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">21.300</h1>
                                </div>
                            </div>
                            <div class="card ms-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Website Aktif</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="check-circle"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">64</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-xxl-7">
                <div class="card flex-fill w-100 ">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Aktivitas Bulan Ini</h5>
                    </div>
                    <div class="card-body py-3">
                        <div class="chart chart-sm">
                            <canvas id="chartjs-dashboard-line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill ms-2 me-3">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Project Terbaru</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th class="d-none d-xl-table-cell">Pembuat</th>
                                <th class="d-none d-xl-table-cell">Tanggal Dibuat</th>
                                <th class="d-none d-xl-table-cell">Terakhir Diubah</th>
                                <th>Status</th>
                                <th class="d-none d-md-table-cell"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Project Apollo</td>
                                <td class="d-none d-xl-table-cell">Admin</td>
                                <td class="d-none d-xl-table-cell">01/01/2023</td>
                                <td class="d-none d-xl-table-cell">31/06/2023</td>
                                <td><span class="badge bg-success">Done</span></td>
                                <td>
                                    <div class="btn-group btn-group-lg mb-3" role="group">
                                        <button class="btn btn-md" style="color: white;background-color: #b513bb">
                                            <b>
                                                <i class="align-middle" data-feather="github" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #fa903e">
                                            <b>
                                                <i class="align-middle" data-feather="globe" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #61b2fd">
                                            <b>
                                                <i class="align-middle" data-feather="info" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #180ad8">
                                            <b>
                                                <i class="align-middle" data-feather="edit" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #ff4747">
                                            <b>
                                                <i class="align-middle" data-feather="trash-2" style="color: white"></i>
                                            </b>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Project Fireball</td>
                                <td class="d-none d-xl-table-cell">Admin</td>
                                <td class="d-none d-xl-table-cell">01/01/2023</td>
                                <td class="d-none d-xl-table-cell">31/06/2023</td>
                                <td><span class="badge bg-danger">Cancelled</span></td>
                                <td class="d-none d-md-table-cell">
                                    <div class="btn-group btn-group-lg mb-3" role="group">
                                        <button class="btn btn-md" style="color: white;background-color: #b513bb">
                                            <b>
                                                <i class="align-middle" data-feather="github" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #fa903e">
                                            <b>
                                                <i class="align-middle" data-feather="globe" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #61b2fd">
                                            <b>
                                                <i class="align-middle" data-feather="info" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #180ad8">
                                            <b>
                                                <i class="align-middle" data-feather="edit" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #ff4747">
                                            <b>
                                                <i class="align-middle" data-feather="trash-2" style="color: white"></i>
                                            </b>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Project Hades</td>
                                <td class="d-none d-xl-table-cell">Admin</td>
                                <td class="d-none d-xl-table-cell">01/01/2023</td>
                                <td class="d-none d-xl-table-cell">31/06/2023</td>
                                <td><span class="badge bg-success">Done</span></td>
                                <td class="d-none d-md-table-cell">
                                    <div class="btn-group btn-group-lg mb-3" role="group">
                                        <button class="btn btn-md" style="color: white;background-color: #b513bb">
                                            <b>
                                                <i class="align-middle" data-feather="github" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #fa903e">
                                            <b>
                                                <i class="align-middle" data-feather="globe" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #61b2fd">
                                            <b>
                                                <i class="align-middle" data-feather="info" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #180ad8">
                                            <b>
                                                <i class="align-middle" data-feather="edit" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #ff4747">
                                            <b>
                                                <i class="align-middle" data-feather="trash-2" style="color: white"></i>
                                            </b>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Project Nitro</td>
                                <td class="d-none d-xl-table-cell">Admin</td>
                                <td class="d-none d-xl-table-cell">01/01/2023</td>
                                <td class="d-none d-xl-table-cell">31/06/2023</td>
                                <td><span class="badge bg-warning">In progress</span></td>
                                <td class="d-none d-md-table-cell">
                                    <div class="btn-group btn-group-lg mb-3" role="group">
                                        <button class="btn btn-md" style="color: white;background-color: #b513bb">
                                            <b>
                                                <i class="align-middle" data-feather="github" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #fa903e">
                                            <b>
                                                <i class="align-middle" data-feather="globe" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #61b2fd">
                                            <b>
                                                <i class="align-middle" data-feather="info" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #180ad8">
                                            <b>
                                                <i class="align-middle" data-feather="edit" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #ff4747">
                                            <b>
                                                <i class="align-middle" data-feather="trash-2" style="color: white"></i>
                                            </b>
                                        </button>
                                    </div>
                            </tr>
                            <tr>
                                <td>Project Phoenix</td>
                                <td class="d-none d-xl-table-cell">Admin</td>
                                <td class="d-none d-xl-table-cell">01/01/2023</td>
                                <td class="d-none d-xl-table-cell">31/06/2023</td>
                                <td><span class="badge bg-success">Done</span></td>
                                <td class="d-none d-md-table-cell">
                                    <div class="btn-group btn-group-lg mb-3" role="group">
                                        <button class="btn btn-md" style="color: white;background-color: #b513bb">
                                            <b>
                                                <i class="align-middle" data-feather="github" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #fa903e">
                                            <b>
                                                <i class="align-middle" data-feather="globe" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #61b2fd">
                                            <b>
                                                <i class="align-middle" data-feather="info" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #180ad8">
                                            <b>
                                                <i class="align-middle" data-feather="edit" style="color: white"></i>
                                            </b>
                                        </button>
                                        <button class="btn" style="color: white;background-color: #ff4747">
                                            <b>
                                                <i class="align-middle" data-feather="trash-2" style="color: white"></i>
                                            </b>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection


