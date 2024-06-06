@extends('layouts.app')
@section('beranda')

@section('content')

@extends('header')

<main class="content px-3 py-2">
                <div class="container-fluid">
		<h5 class="card-header">
			<strong></strong>
			<a class="btn btn-secondary btn-sm float-right" href="" data-toggle="modal" data-target="#"><i class="fas fa-key"></i> Ubah Password</a>
			<a class="btn btn-secondary btn-sm float-right mr-2" href="" data-toggle="modal" data-target="#ubahprof {{ $user->id }}"><i class="fas fa-user-edit"></i> Ubah Profile</a>
		</h5>
                    <div class="mb-3">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Selamat Datang {{ Auth::user()->name }}</h4>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                                alt="">
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
                    </div>
                    <!-- Table Element -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                DATA APASIH
                            </h5>
                            <h6 class="card-subtitle text-muted">
                               
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

<!--Modal edit profile-->
    <div class="modal fade" id="#ubahprof{{ $user->id }}" tabindex="-1" aria-labelledby="#ubah-prof{{ $users->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="#ubah-prof{{ $users->id }}Label">Edit Data User</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <form action="{{ route('users.update', $users->id) }}" method="POST">
                   @csrf
                   @method('PUT')
                   <div class="form-group">
                       <label for="name">Nama</label>
                       <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}">
                   </div>

                   <div class="form-group">
                       <label for="email">Email</label>
                       <input type="email" class="form-control" id="email" name="email" value="{{$users->email }}">
                   </div>

                   <div class="form-group">
                       <label for="role_id">Level</label>
                       <input type="text" class="form-control" id="role_id" name="role_id" value="{{ $users->role_id}}">
                   </div>

                   <div class="form-group">
                       <label for="position_id">Jabatan</label>
                       <input type="text" class="form-control" id="position_id" name="position_id" value="{{ $users->position_id}}">
                   </div>

                   <div class="form-group">
                       <label for="no_peg">Nomor Pegawai</label>
                       <input type="text" class="form-control" id="no_peg" name="no_peg" value="{{ $users->no_peg }}">
                   </div>

                   <div class="form-group">
                       <label for="department_id">Departement</label>
                       <input type="text" class="form-control" id="department_id" name="department_id" value="{{ $users->department_id }}">
                   </div>

                   <div class="form-group">
                       <label for="jml_cuti">Sisa Cuti</label>
                       <input type="text" class="form-control" id="jml_cuti" name="jml_cuti" value="{{ $users->jml_cuti }}">
                   </div>

                   <button type="submit" class="btn btn-primary">Simpan</button>
               </form>
      
           </div>
       </div>
   </div>
</div>
