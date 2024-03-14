@extends('layouts.app')

@push('style')
@powerGridStyles
@endpush

@section('buttons')
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <a href="{{ route('karyawan-create') }}" class="btn btn-sm btn-primary">
            <span data-feather="plus-circle" class="align-text-bottom me-1"></span>
            Tambah Data Karyawan
        </a>
    </div>
</div>
@endsection

@section('content')
@include('partials.alerts')
<table class="table table-bordered">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Posisi</th>
                <th scope="col">Nomor Pegawai</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->position_id }}</td>
                <td>{{ $user->no_peg }}</td>
                <td class="text-center">
                    <a href="{{ route('karyawan-edit', $user->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    <button wire:click="destroy({{ $user->id }})" class="btn btn-sm btn-danger">DELETE</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('script')
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
@powerGridScripts
@endpush