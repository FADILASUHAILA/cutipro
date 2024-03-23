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
                                               1
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
                    <!-- Table Element -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Data Karyawan
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
                                <td>   @if($user->departement)
                {{ $user->departement->departement_name }}
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
