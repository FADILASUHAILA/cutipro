@extends('layouts.app')
@section('beranda')
@section('content')
    <!--End Header-->
    @extends('header')

    @include('navbar1')


<main class="content px-3 py-2">
<div class="container-fluid">
<div class="card ">
<div class="card-header">
                            <h5 class="card-title">
                                DATA ADMIN
                            </h5>
                            <div class="d-flex justify-content-end mb-3">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDataAdmin"><i class="bi bi-plus-lg"></i> Tambah Data
</button>
                            </div>
                                    <div class="container mt-3">
    <div class="row justify-content-end">
        <div class="col-md-4">
        
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
                            <th scope="col">Nama</th>
                            <th scope="col">Department</th>
                            <th scope="col">Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                              
                            <tr >
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


<!-- Modal tambah data-->
<div class="modal fade" id="ModalDataAdmin" tabindex="-1" aria-labelledby="ModalDataAdminLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalDataAdminLabel">Tambahkan Data Admin</h1>
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
   
</html>
