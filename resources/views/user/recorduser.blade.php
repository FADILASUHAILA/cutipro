
@extends('layouts.app')
@section('beranda')
@section('content')



    <!--End Header-->
    @extends('header')

    @include('navbar')
<!--content-->
<div class="container-fluid">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong class="">Selamat datang {{ Auth::user()->name }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
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
   	</body>
</html>