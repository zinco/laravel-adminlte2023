<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tipo;
class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo')->insert([
          
             [
                 'name'      =>'Computador',
                 'description'      =>'Computador de mesa',
                 'created_at'    => date('Y-m-d H:i:s'),
                 'updated_at'    => date('Y-m-d H:i:s'),
                 
             ],
             [
                'name'      =>'Notebook',
                'description'      =>'Computador portatio',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                
            ],
            [
                'name'      =>'Roteador Wifi',
                'description'      =>'Roteador wifi',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                
            ],
            [
                'name'      =>'AP',
                'description'      =>'Ponto de acesso',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                
            ],
            [
                'name'      =>'Controle de acesso',
                'description'      =>'Dispositivo de controle de acesso com digital',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                
            ],
            [
                'name'      =>'Impressora',
                'description'      =>'Impressora multifuncional',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                
            ],
            [
                'name'      =>'ONU',
                'description'      =>'Dispositivo de fibra Otpica',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                
            ],
         ]);
    }
}
