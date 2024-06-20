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
                                @if ($departments->isNotEmpty())
                                @foreach($departments as $departement)
                            <tr >
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $departement->department_name }}</td>
                                <td>{{ $departement->ketua_department_name }}</td>
                                <td>
                <!-- Tombol Delete -->
                <button type="button" class="btn btn-secondary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEditDepartement{{$departement->id}}"><i class="bi bi-pencil-square"></i> Edit</button>

                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDeleteDepartement{{$departement->id}}"><i class="bi bi-trash3"></i> Delete</button>
                
            
              </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4">Tidak ada departemen yang tersedia saat ini.</td>
                            </tr>
@endif
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
          <div class="mb-3">
          <label for="departement_name" class="form-label fw-bold">Nama Departement</label>
            <input type="text" name="department_name" class="form-control" placeholder="Masukkan nama departement">
          </div>
          <div class="mb-3">
          <label for="ketua_departement_name" class="form-label fw-bold">Nama Ketua Departement</label>
            <input type="text" name="ketua_department_name" class="form-control" placeholder="Masukkan nama ketua departement">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal edit data-->
<div class="modal fade" id="ModalEditDepartement{{$departement->id}}" tabindex="-1" aria-labelledby="ModalEditDepartement{{$departement->id}}Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalEditDepartement{{$departement->id}}Label">Tambahkan Data Departement</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
        <form action="{{route('departement.update',$departement->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="mb-3">
          <label for="departement_name" class="form-label fw-bold">Nama Departement</label>
            <input type="text" name="department_name" class="form-control" value="{{ $departement->department_name }}">
          </div>
          <label for="ketua_departement_name" class="form-label fw-bold">Nama Ketua Departement</label>
            <input type="text" name="ketua_department_name" class="form-control" value="{{ $departement->ketua_department_name }}">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
@foreach($departments as $departement)
<div class="modal fade" id="ModalDeleteDepartement{{ $departement->id }}" tabindex="-1" aria-labelledby="ModalDeleteDepartement{{ $departement->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalDeleteDepartement{{ $departement->id }}Label">Hapus Departement</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus departement ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" action="{{ route('departement.destroy', $departement->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Iya</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection


</html>