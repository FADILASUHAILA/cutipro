@extends('layouts.app')
@section('beranda')
@section('content')



    <!--End Header-->
    @extends('header')

    @include('navbar')
<!--content-->
<main class="content px-3 py-2">
<div class="card border-0">
<div class="card-header">
                            <h5 class="card-title">
                                DATA CUTI KARYAWAN
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                                           </h6>
                                                           <div class="row justify-content-end">
        <div class="col-md-4">
        <form class="d-flex justify-content-end align-items-center" action="{{ route('cuti.search') }}" method="POST">
    @csrf
    <div class="form-group mb-0">
        <input type="number" class="form-control form-control-sm" id="tahun" name="tahun" placeholder="Masukkan Tahun" required>
    </div>
    <button type="submit" class="btn btn-secondary btn-sm ml-2"><i class="fa fa-fw fa-search"></i> Cari</button>
</form>
        </div>
    </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">No Pegawai</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Jenis_cuti</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Jml Cuti Diambil</th>
                                        <th scope="col">Sisa Cuti</th>
                                        <th scope="col">Tgl Cuti</th>
                                        <th scope="col">Tgl Masuk</th>

                                    </tr>
                                </thead>
                                    <tbody>
                                    @foreach ($listcutis as $key => $data)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>{{ $data->input}}</td>
    <td>{{ $data->no_peg}}</td>
    <td>{{ $data->nama }}</td>
    <td>{{ $data->position }}</td>
        <td>{{ $data->jenis_cuti }}</td>
        <td>{{ $data->keterangan }}</td>
        <td>{{ $data->jml_cuti }}</td>
        <td>{{ $data->sisa_cuti }}</td>
        <td>{{ $data->cuti }}</td>
        <td>{{ $data->masuk }}</td>
    </tr>
@endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
</main>
