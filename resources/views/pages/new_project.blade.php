@extends('app')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong> New Project </strong></h1>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Tambahkan Project Baru</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="form-label">
                                    Nama Project
                                </label>
                                <input type="text" name="name" id="" placeholder="Masukkan Nama Projek yang Akan Ditambahkan !" class="form-control mb-2">
                            </div>
                            <div class="col-6">
                                <label for="" class="form-label">
                                    Direktori Project
                                </label>
                                <input type="file" name="dir_project" placeholder="Pilih File Index dari Project Tersebut" class="form-control mb-2"/>
                            </div>
                            <div class="col-6">
                                <label for="" class="form-label">
                                    Repository Github
                                </label>
                                <input type="text" name="git_project" id="" placeholder="Bila Project Sudah diupload di github, tambahkan Link ke repo nya !" class="form-control mb-2">
                            </div>
                            <div class="col-6">
                                <label for="" class="form-label">
                                    URL Project
                                </label>
                                <input type="url" name="url" id="" class="form-control mb-2" placeholder="Bila Website Sudah Diupload Tambahkan URLnya !">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
