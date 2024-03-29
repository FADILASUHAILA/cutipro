@extends('layouts.app')

@section('content')

@extends('header')

    <!--End Header-->
@include('navbar1')

<!-- Page Heading -->
<div class="container-fluid">
<div class="card ">
<h5 class="card-header " style="background-color: #e9ecef">
                <span>DATA KARYAWAN</span>
                <div class="container mt-3">
    <div class="row justify-content-end">
        <div class="col-md-4">
            <form class="d-flex justify-content-end align-items-center" action="" method="post">
                <div class="form-group mb-0">
                    <input type="number" class="form-control form-control-sm" id="inputPassword2" name="tahun" placeholder="Masukkan Tahun" required>
                </div>
                <button type="submit" class="btn btn-secondary btn-sm ml-2"><i class="fa fa-fw fa-search"></i> Cari</button>
            </form>
        </div>
    </div>
</div>
                            </h5>
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
                                <td>   @if($user->department)
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
        </div>
    </div>

</div>
</div>


<!-- Modal tambah data-->
<div class="modal fade" id="ModalDataImunisasi" tabindex="-1" aria-labelledby="ModalTambahDataImunisasiLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataImunisasiLabel">Masukkan Data Ibu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
      <form action="" method="post">
    @csrf
        <div class="input-group mt-1">
        <span class="input-group-text">Nama</span>
          <input type="text" name="nama" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Email</span>
          <input type="email" name="email" class="form-control" placeholder="">
        </div>
      
        <div class="input-group mt-2">
        <span class="input-group-text">Password</span>
          <input type="password" name="pass" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">NoPeg</span>
          <input type="text" name="no_peg" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Department</span>
          <input type="text" name="keterangan" class="form-control" placeholder="">
        </div>
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