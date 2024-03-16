@section('title')
Data Posts - Belajar Livewire 3 di SantriKoding.com
@endsection




<div class="col">

    <!-- flash message -->
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <!-- end flash message -->

    <a href="/create" wire:navigate class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">Tambah Karyawan Baru</a>
    <div class="card border-0 rounded shadow-sm">
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr class="text-center">
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