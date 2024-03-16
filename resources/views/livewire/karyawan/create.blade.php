<div>
    <form wire:submit.prevent="savekaryawans" method="post" novalidate>
        @include('partials.alerts')
        @foreach ($karyawans as $i => $karyawan)
        <div class="mb-3">
            <div class="w-100">
                <div class="mb-3">
                    <x-form-label id="name{{ $i }}" label='Nama Karyawaan {{ $i + 1 }}' />
                    <x-form-input id="name{{ $i }}" name="name{{ $i }}" wire:model.defer="karyawans.{{ $i }}.name" />
                    <x-form-error key="karyawans.{{ $i }}.name" />
                </div>
                <div class="mb-3">
                    <x-form-label id="email{{ $i }}" label='Email Karyawaan {{ $i + 1 }}' />
                    <x-form-input id="email{{ $i }}" name="email{{ $i }}" type="email"
                        wire:model.defer="karyawans.{{ $i }}.email" placeholder="Email aktif" />
                    <x-form-error key="karyawans.{{ $i }}.email" />
                </div>
                <div class="mb-3">
                    <x-form-label id="no_peg{{ $i }}" label='Nomor Pegawai {{ $i + 1 }}' />
                    <x-form-input id="no_peg{{ $i }}" name="no_peg{{ $i }}" wire:model.defer="karyawans.{{ $i }}.no_peg"
                        placeholder="Format: 8343**" />
                    <x-form-error key="karyawans.{{ $i }}.no_peg" />
                </div>
                <div class="mb-3">
                    <x-form-label id="password{{ $i }}"
                        label='Password Karyawaan {{ $i + 1 }} (default: "password" jika tidak diisi)' required="false" />
                    <x-form-input id="password{{ $i }}" name="password{{ $i }}"
                        wire:model.defer="karyawans.{{ $i }}.password" required="false" />
                    <x-form-error key=" karyawans.{{ $i }}.password" />
                </div>
                <div class="mb-3">
                    <x-form-label id="position_id{{ $i }}" label='Jabatan / Posisi Karyawaan {{ $i + 1 }}' />
                    <select class="form-select" aria-label="Default select example" name="position_id"
                        wire:model.defer="karyawans.{{ $i }}.position_id">
                        <option selected disabled>-- Pilih Posisi --</option>
                        @foreach ($positions as $position)
                        <option value="{{ $position->id }}">{{ ucfirst($position->position_name) }}</option>
                        @endforeach
                    </select>
                    <x-form-error key="karyawans.{{ $i }}.position_id" />
                </div>
                <div class="mb-3">
                    <x-form-label id="role_id{{ $i }}" label='Role {{ $i + 1 }}' />
                    <select class="form-select" aria-label="Default select example" name="role_id"
                        wire:model.defer="karyawans.{{ $i }}.role_id">
                        <option selected disabled>-- Pilih Role --</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ ucfirst($role->role_name) }}</option>
                        @endforeach
                    </select>
                    <x-form-error key="karyawans.{{ $i }}.role_id" />
                </div>
            </div>
            @if ($i > 0)
            <button class="btn btn-sm btn-danger mt-2" wire:click="removekaryawanInput({{ $i }})"
                wire:target="removekaryawanInput({{ $i }})" type="button" wire:loading.attr="disabled">Hapus</button>
            @endif
        </div>
        <hr>
        @endforeach

        <div class="d-flex justify-content-between align-items-center mb-5">
            <button class="btn btn-primary">
                Simpan
            </button>
            <button class="btn btn-light" type="button" wire:click="addkaryawanInput" wire:loading.attr="disabled">
                Tambah Input
            </button>
        </div>
    </form>
</div>