<?php

namespace App\Livewire\Karyawan;

use App\Models\User;
use Livewire\Component;
use App\Models\Position;
use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{

    public $karyawans;
    public Collection $roles;
    public Collection $positions;

    public function mount()
    {
        $this->positions = Position::all();
        $this->roles = Role::all();
        $this->karyawans = [
            ['name' => '', 'email' => '', 'no_peg' => '', 'password' => '', 'role_id' => User::USER_ROLE_ID, 'position_id' => $this->positions->first()->id]
        ];
    }

    public function addkaryawanInput(): void
    {
        $this->karyawans[] = ['name' => '', 'email' => '', 'no_peg' => '', 'password' => '', 'role_id' => User::USER_ROLE_ID, 'position_id' => $this->positions->first()->id];
    }

    public function removekaryawanInput(int $index): void
    {
        unset($this->karyawans[$index]);
        $this->karyawans = array_values($this->karyawans);
    }

    public function savekaryawans()
    {
        // cara lebih cepat, dan kemungkinan data role tidak akan diubah/ditambah
        $roleIdRuleIn = join(',', $this->roles->pluck('id')->toArray());
        $positionIdRuleIn = join(',', $this->positions->pluck('id')->toArray());
        // $roleIdRuleIn = join(',', Role::all()->pluck('id')->toArray());

        // setidaknya input pertama yang hanya required,
        // karena nanti akan difilter apakah input kedua dan input selanjutnya apakah berisi
        $this->validate([
            'karyawans.*.name' => 'required',
            'karyawans.*.email' => 'required|email|unique:users,email',
            'karyawans.*.no_peg' => 'required|unique:users,no_peg',
            'karyawans.*.password' => '',
            'karyawans.*.role_id' => 'required|in:' . $roleIdRuleIn,
            'karyawans.*.position_id' => 'required|in:' . $positionIdRuleIn,
        ]);
        

        // alasan menggunakan create alih2 mengunakan ::insert adalah karena tidak looping untuk menambahkan created_at dan updated_at
        $affected = 0;
        foreach ($this->karyawans as $karyawan) {
            if (trim($karyawan['password']) === '') $karyawan['password'] = 'password';
            $karyawan['password'] = Hash::make($karyawan['password']);
            User::create($karyawan);
            $affected++;
        }

        redirect()->route('karyawan.index')->with('success', "($affected) data karyawaan yang berhasil ditambahkan.");
    }

    /**
     * render
     *
     * @return void
     */

    public function render()
    {
        return view('livewire.karyawan.create');
    }
}
