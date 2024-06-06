@extends('layouts.app')
@section('beranda')
@section('content')
    <!--End Header-->
@extends('header')

@include('navbar1')
<!--End Header-->
<main class="content px-3 py-2">
<div class="container-fluid">
<div class="card">
<div class="card-header">
                            <h5 class="card-title">
                                DATA DEPARTEMENT
                            </h5>
                            <div class="d-flex justify-content-end mb-3">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDataDepartement"><i class="bi bi-plus-lg"></i> Tambah Data
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
                            <th scope="col">Nama Ketua Department</th>
                            <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($departments as $departement)
                            <tr >
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $departement->department_name }}</td>
                                <td>{{ $departement->ketua_department_name }}</td>
                                <td>
                <!-- Tombol Delete -->
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDeleteDepartement">
                <i class="bi bi-trash3"></i>
</button>
            </td>
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
<div class="modal fade" id="ModalDataDepartement" tabindex="-1" aria-labelledby="ModalDataDepartementLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalDataDepartementLabel">Tambahkan Data Departement</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
        <form action="{{route('departement.store') }}" method="post">
          @csrf
          <div class="input-group mt-1">
            <span class="input-group-text">Nama Departement</span>
            <input type="text" name="department_name" class="form-control" placeholder="Masukkan nama departement">
          </div>
          <div class="input-group mt-2">
            <span class="input-group-text">Nama Ketua Department</span>
            <input type="text" name="ketua_department_name" class="form-control" placeholder="Masukkan nama ketua departement">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalDeleteDepartement" tabindex="-1" aria-labelledby="ModalDeleteDepartementLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalDeleteDepartementLabel">Hapus Departement</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus departement ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Iya</button>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var deleteModal = document.getElementById('ModalDeleteDepartement');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var departmentId = button.getAttribute('data-id');

        var form = deleteModal.querySelector('#form-delete-department');
        form.action = '/departement/' + departmentId;
        form.querySelector('#department_id').value = departmentId;
    });
});
</script>
</html>