<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PositionSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Muhammad Pauzi (Admin)',
            'email' => 'admin@gmail.com',
            'role_id' => Role::where('role_name', 'superadmin')->first('id'),
            'position_id' => Position::where('position_name', 'Operator')->first('id'),
        ]);
        \App\Models\User::factory(1)->create([
            'role_id' => Role::where('role_name', 'admin')->first('id'),
            'position_id' => Position::where('position_name', 'Manager')->first('id'),
        ]);
        \App\Models\User::factory(10)->create([
            'role_id' => Role::where('role_name', 'user')->first('id'), // user === employee
            'position_id' => Position::select('id')->inRandomOrder()->first()->id
        ]);
    }
}
