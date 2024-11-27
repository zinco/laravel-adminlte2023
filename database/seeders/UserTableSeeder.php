<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Str;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*DB::table('users')->insert([
            [
                'name' => 'Administrador do sistema',
                'email' => 'adminstrador@email.com',               
                'password' => bcrypt('teste123'),
                'remember_token' => Str::random(10),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Cliente',
                'email' => 'cliente@email.com',                
                'password' => bcrypt('teste123'),
                'remember_token' => Str::random(10),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ]);*/

        $user =   User::create([
                'name' => 'Administrador do sistema',
                'email' => 'adminstrador@email.com',               
                'password' => bcrypt('teste123'),
                'remember_token' => Str::random(10),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),

        ]);
            $roles = Role::all();
            $user->roles()->saveMany($roles);
        
    }
}
