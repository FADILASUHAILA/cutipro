@section('title')
Data Karyawan
@endsection

<div class="row">

    @include('partials.alerts')
    <!-- end flash message -->
    <div class="col-lg-9 col-6">
        <h2>Data Karyawan</h2>
    </div>
    <div class="col-lg-3 col-6 text-end">
        <a href="{{ route('karyawan.create') }}" wire:navigate class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">Tambah Karyawan Baru</a>
    </div>
    <div class="card border-0 rounded shadow-sm">
        <div class="card-body text-nowrap overflow-x-auto">
            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr class="text-center text-nowrap">
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">No.Pegawai</th>
                        <th scope="col" style="width: 15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{!! $user->email !!}</td>
                        <td>{{ $user->position_id }}</td>
                        <td>{{ $user->no_peg }}</td>
                        <td class="text-center">
                            <a href="/edit/{{ $user->id }}" wire:navigate class="btn btn-sm btn-primary">EDIT</a>
                            <button class="btn btn-sm btn-danger">DELETE</button>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data belum Tersedia.
                    </div>
                    @endforelse
                </tbody>
            </table>
            {{ $users->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
</div>