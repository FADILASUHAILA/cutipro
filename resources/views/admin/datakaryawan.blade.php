@extends('layouts.app')
  

@section('content')
@extends('header')


    <!--End Header-->
    @include('navbaradmin')
    
    <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Admin Dashboard</h4>
                    </div>
                    <div class="row">
                    <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                5
                                            </h4>
                                            <p class="mb-2">
                                                Total Pengajuan
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    +10%
                                                </span>
                                                <span class="text-muted">
                                                    Pengajuan Tahun ini
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                               {{$totalKaryawan}}
                                            </h4>
                                            <p class="mb-2">
                                                Total Karyawan
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    +1%
                                                </span>
                                                <span class="text-muted">
                                                    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Data Karyawan
                            </h5>
                            <button type="button" class="btn btn-secondary btn-sm float-left mr-2" data-bs-toggle="modal" data-bs-target="#ModalDataKaryawanAdmin"><i class="bi bi-plus-lg"></i> Tambah Data
                            </button>   
			               <form class="d-flex justify-content-end align-items-center" action="{{ route('datakaryawan.search') }}" method="get">
    @csrf
                <div class="form-group mb-0">
                    <input type="text" class="form-control form-control-sm" id="no_peg" name="no_peg" placeholder="Masukkan No Pegawai" required>
                </div>
                <button type="submit" class="btn btn-secondary btn-sm ml-2"><i class="fa fa-fw fa-search"></i> Cari</button>
            </form>
                           
                            <h6 class="card-subtitle text-muted">
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nopeg</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Department</th>
                            <th scope="col">Position</th>
                            <th scope="col">Level</th>
                                    </tr>
                                </thead>  
                                <tbody>
                                @foreach($karyawans as $karyawan)
                            <tr >
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $karyawan->no_peg}}</td>
                                <td>{{ $karyawan->name}}</td>
                                <td>{{ $karyawan->email}}</td>
                                <td>@if($karyawan->department)

                {{ $karyawan->department->department_name }}
            @else
                Department Not Assigned
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
            </main>
</div>
</div>

</html>