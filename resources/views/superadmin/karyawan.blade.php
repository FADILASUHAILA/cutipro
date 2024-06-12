

@extends('layouts.app')

@section('content')

@extends('header')

    <!--End Header-->
@include('navbar1')



<!-- Page Heading -->
<main class="content px-3 py-2">
<div class="container-fluid">
<div class="card ">
<div class="card-header">
                            <h5 class="card-title">
                                DATA KARYAWAN
                            </h5>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDataKaryawan"><i class="bi bi-person-plus-fill"></i> Tambah Data
                            </button>
                <div class="container mt-3">
    <div class="row justify-content-end">
        <div class="col-md-4">
        <form class="d-flex justify-content-end align-items-center" action="{{ route('karyawan.search') }}" method="POST">
    @csrf
                <div class="form-group mb-0">
                    <input type="text" class="form-control form-control-sm" id="no_peg" name="no_peg" placeholder="Masukkan No Pegawai" required>
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
                            <th scope="col">Aksi</th>
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
                                <td>
                                <button type="button" class="btn btn-secondary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEditKaryawan{{$user->id}}">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDeleteKaryawan{{$user->id}}">
                                        <i class="bi bi-trash3"></i> Delete
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal edit data-->
                            <div class="modal fade" id="ModalEditKaryawan{{$user->id}}" tabindex="-1" aria-labelledby="ModalEditKaryawan{{$user->id}}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header btn-secondary">
                                            <h1 class="modal-title fs-5" id="ModalEditKaryawan{{$user->id}}Label">Edit Data Karyawan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body lg-4">
                                            <form action="" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="name" class="form-label fw-bold">Nama</label>
                                                    <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" placeholder="Masukkan nama">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label fw-bold">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" placeholder="Masukkan email">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label fw-bold">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password (biarkan kosong jika tidak ingin mengubah)">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="no_peg" class="form-label fw-bold">No Pegawai</label>
                                                    <input type="text" name="no_peg" class="form-control" id="no_peg" value="{{ $user->no_peg }}" placeholder="Masukkan nomor pegawai">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="level" class="form-label fw-bold">Level</label>
                                                    <select name="role_id" class="form-select" id="level">
                                                        @foreach ($roles as $role)
                                                            <option value ="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->role_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="position" class="form-label fw-bold">Posisi</label>
                                                    <select name="position_id" class="form-select" id="position">
                                                        @foreach ($positions as $position)
                                                            <option value="{{ $position->id }}" {{ $user->position_id == $position->id ? 'selected' : '' }}>{{ $position->position_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="department" class="form-label fw-bold">Departement</label>
                                                    <select name="department_id" class="form-select" id="department">
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->id }}" {{ $user->department_id == $department->id ? 'selected' : '' }}>{{ $department->department_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jml_cuti" class="form-label fw-bold">Jumlah Cuti</label>
                                                    <input type="number" name="jml_cuti" class="form-control" id="jml_cuti" value="{{ $user->jml_cuti }}" readonly>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>











<!-- Modal tambah data-->
<div class="modal fade" id="ModalDataKaryawan" tabindex="-1" aria-labelledby="ModalDataKaryawanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header btn-secondary">
        <h5 class="modal-title" id="ModalDataKaryawanLabel"> <i class="bi bi-person-plus-fill me-2"></i> <!-- Ikon Bootstrap -->Tambahkan Data Karyawan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('karyawan.store') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label fw-bold">Nama</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password">
          </div>
          <div class="mb-3">
            <label for="no_peg" class="form-label fw-bold">No Pegawai</label>
            <input type="text" name="no_peg" class="form-control" id="no_peg" placeholder="Masukkan nomor pegawai">
          </div>
          <div class="mb-3">
            <label for="level" class="form-label fw-bold">Level</label>
            <select name="role_id" class="form-select" id="level">
            @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ $role->role_name }}</option>
            @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="position" class="form-label fw-bold">Posisi</label>
            <select name="position_id" class="form-select" id="position">
            @foreach ($positions as $position)
            <option value="{{ $position->id }}">{{ $position->position_name }}</option>
            @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="department" class="form-label fw-bold">Departement</label>
            <select name="department_id" class="form-select" id="department">
            @foreach ($departments as $department)
            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
            @endforeach
    </select>
          </div>
          <div class="mb-3">
            <label for="jml_cuti" class="form-label fw-bold">Jumlah Cuti</label>
            <input type="number" name="jml_cuti" class="form-control" id="jml_cuti" value="19" readonly>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


