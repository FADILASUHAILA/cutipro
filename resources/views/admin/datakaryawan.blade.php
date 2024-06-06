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
                            
			<a class="btn btn-secondary btn-sm float-left mr-2" href="" data-toggle="modal" data-target="#ModalDataKaryawan"><i class="fas fa-user-plus"></i>Tambah Data</a>
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
                            <th scope="col">Departement</th>
                            <th scope="col">Position</th>
                            <th scope="col">Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                            <tr >
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->no_peg}}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>@if($user->department)
                {{ $user->department->department_name }}
            @else
                Departement Not Assigned
            @endif</td>
                                <td>{{ $user->position->position_name}}</td>
                                <td>{{ $user->role->role_name}}</td>
                            </tr>
                            @endforeach
  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>


<!-- Modal tambah data-->
<div class="modal fade" id="ModalDataKaryawan" tabindex="-1" aria-labelledby="ModalTambahDataKaryawanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataKaryawanLabel">Masukkan Data Ibu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
      <form action="" method="post">
    @csrf
        <div class="input-group mt-1">
        <span class="input-group-text">Nama</span>
          <input type="text" name="name" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Email</span>
          <input type="email" name="email" class="form-control" placeholder="">
        </div>
      
        <div class="input-group mt-2">
        <span class="input-group-text">Password</span>
          <input type="password" name="password" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">NoPeg</span>
          <input type="text" name="no_peg" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Level</span>
        <select name="role_id">
          <option value="Admin">Admin</option>
          <option value="Superadmin">Superadmin</option>
          <option value="Karyawan">Karyawan</option>
        </select>
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Position</span>
        <select name="role_id">
          <option value="Operator">Operator</option>
          <option value="Manager">Manager</option>
          <option value="Karyawan">Karyawan</option>
        </select>
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Departement</span>
        <select name="role_id">
          <option value="Operator">Operator</option>
          <option value="Manager">Manager</option>
          <option value="Karyawan">Karyawan</option>
        </select>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-Danger" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
</form>
</html>