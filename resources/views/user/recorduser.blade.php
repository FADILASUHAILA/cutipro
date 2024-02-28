
@extends('layouts.app')
@section('beranda')
@section('content')



    <!--End Header-->
    @extends('header')

    @include('navbar')
    <div class="container-lg">
        <div class="row ">
            <!--Sidebar-->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded border mt-3">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link active link-light" aria-current="page" href="/user"><i class="bi bi-house-door">
                                            </i> Home </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="/profile"><i class="bi bi-textarea-resize"></i> Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="/historyrecord"><i class="bi bi-layout-text-window-reverse"></i>History Record</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="/pengajuan"><i class="bi bi-question-circle"></i> Leave Application</a>
                                    </li>
									<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						{{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-menu mt-2">
							<li>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Log Out</button>
        </form>
    </li>

    </ul>
                    </li>
							
									
                        </div>
                    </div>
                </nav>
            </div> 
            <!--End sidebar-->
<!--content-->
<div class="col-lg-9 mt-3">
        <!-- Page Heading -->
        <div class="card ">
            <h5 class="card-header " style="background-color: #e9ecef">
                <strong>History Cuti Tahun Lalu</strong>
                <div class="container mt-3">
    <div class="row justify-content-end">
        <div class="col-md-4">
            <form class="d-flex justify-content-end align-items-center" action="" method="post">
                <div class="form-group mb-0">
                    <input type="number" class="form-control form-control-sm" id="inputPassword2" name="tahun" placeholder="Masukkan Tahun" required>
                </div>
                <button type="submit" class="btn btn-danger btn-sm ml-2"><i class="fa fa-fw fa-search"></i> Cari</button>
            </form>
        </div>
    </div>
</div>
            </h5>
            <div class="card-body">
                <table class="table table-hover mt-2" id="table-id">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tgl Input</th>
                            <th scope="col">Jenis Cuti</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Cuti Diambil</th>
                            <th scope="col">Sisa Cuti</th>
                            <th scope="col">Cuti 1</th>
                            <th scope="col">Cuti 2</th>
                            <th scope="col">Masuk Kerja</th>
                        </tr>
                    </thead>
                   
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
	</body>
</html>