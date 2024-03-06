@extends('layouts.app')

@section('content')

@extends('header')

    <!--End Header-->
@include('navbar1')

<!-- Page Heading -->
<div class="container-fluid">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong class="">Selamat datang {{ Auth::user()->name }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="card ">
            <h5 class="card-header " style="background-color: #e9ecef">
                <strong>DATA KARYAWAN</strong>
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
                            <th scope="col">No</th>
                            <th scope="col">Nopeg</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Departement</th>
                            <th scope="col">Position</th>
                            <th scope="col">Level</th>
                           
                        </tr>
                    </thead>
                        <tbody>
                        @foreach($users as $karyawan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $karyawan->no_peg}}</td>
                                <td>{{ $karyawan->name}}</td>
                                <td>{{ $karyawan->email}}</td>
                                <td>   @if($karyawan->department)
                {{ $karyawan->department->department_name }}
            @else
                Departement Not Assigned
            @endif</td>
                                <td>{{ $karyawan->position->position_name}}</td>
                                <td>{{ $karyawan->role->role_name}}</td>
                            </tr>
                            @endforeach
  </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>