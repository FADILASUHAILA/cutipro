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
<div class="modal fade" id="ModalDataKaryawanAdmin" tabindex="-1" aria-labelledby="ModalDataKaryawanAdminLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header btn-secondary">
        <h5 class="modal-title" id="ModalDataKaryawanAdminLabel"> <i class="bi bi-person-plus-fill me-2"></i> <!-- Ikon Bootstrap -->Tambahkan Data Karyawan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
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

</html>