<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Member;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('123'),
            'level' =>'Admin',
        ]);
        
        User::create([
            'name' => 'kasir',
            'username' => 'kasir',
            'password' => bcrypt('222'),
            'level' =>'Kasir',
        ]);

        Member::create([
            'nama' => 'member',
            'username' => 'member',
            'password' => bcrypt('111'),
            'alamat' => 'jl.',
            'no_telp' => '08937211414.',
        ]);
    }
}
