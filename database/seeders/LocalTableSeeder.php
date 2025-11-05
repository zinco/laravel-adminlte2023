<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Local;
class LocalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locals')->insert([

            [
                'name'      =>'Tbtran',
                'description'      =>'Secretaria de transito de Telêmaco Borba',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                
            ],
            [
                'name'      =>'Guarda Municipal',
                'description'      =>'Predio da Guarda Muinicipal',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                
            ],
            [
                'name'      =>'Cis',
                'description'      =>'Centro Integrado de Segurança',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                
            ],


        ]);
    }
}
