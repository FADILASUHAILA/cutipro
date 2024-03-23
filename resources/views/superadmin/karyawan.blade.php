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
          <div class="col-md-8">
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahPegawaiModal">
              </i> Tambah Karyawan
            </button>
          </div>
          <div class="col-md-4">
            <form class="d-flex justify-content-end align-items-center" action="" method="post">
              <div class="form-group mb-0">
                <input type="number" class="form-control form-control-sm" id="inputPassword2" name="tahun" placeholder="Masukkan Tahun" required>
              </div>
              <button type="submit" class="btn btn-secondary btn-sm ml-2"><i class="fa fa-fw fa-search"></i> Cari</button>
            </form>
          </div>
          <h6>
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{session()->get('message') }}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
          </h6>
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
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->no_peg}}</td>
          <td>{{ $user->name}}</td>
          <td>{{ $user->email}}</td>
          <td> @if($user->departement)
            {{ $user->departement->departement_name }}
            @else
            Departement Not Assigned
            @endif
          </td>
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


<!-- Modal Tambah Karyawan-->
<div class="modal fade" id="tambahPegawaiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="tambahPegawaiForm" action="{{ route('karyawan.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="no_peg">Nomor Pegawai:</label>
            <input type="text" class="form-control" id="no_peg" name="no_peg" required>

            @error('no_peg')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" required>

            @error('name')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>

            @error('email')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="position_id">Posisi:</label>
            <select class="form-control" id="position_id" name="position_id" required>
              <option selected>Pilih Posisi</option>
              @foreach($positions as $position)
              <option value="{{$position->id}}">{{$position->position_name}}</option>
              @endforeach
            </select>

            @error('position_id')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="role_id">Peran:</label>
            <select class="form-control" id="role_id" name="role_id" required>
              <option selected>Pilih Role</option>
              @foreach($roles as $role)
              <option value="{{$role->id}}">{{$role->role_name}}</option>
              @endforeach
            </select>

            @error('role_id')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="departement_id">Departemen:</label>
            <select class="form-control" id="departement_id" name="departement_id" required>
              <option selected>Pilih Departement</option>
              @foreach($departements as $departement)
              <option value="{{$departement->id}}">{{$departement->departement_name}}</option>
              @endforeach
            </select>

            @error('departement_id')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>

            @error('password')
            <div class="alert alert-danger mt-2">
              {{ $message }}
            </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Tambah Karyawan -->
</form>

</html>