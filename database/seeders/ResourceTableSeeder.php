<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Resource;

class ResourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resources')->insert([
            //role
            [
                'name'          => 'Listar as  Funções.',
                'resource'      =>'roles.index',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
            [
                'name'      =>'Formulário Criar uma nova função.',
                'resource'      =>'roles.create',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
           
            [
                'name'      =>'Visualizar uma função.',
                'resource'      =>'roles.show',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
            [
                'name'      =>'Formulário edição de uma função',
                'resource'      =>'roles.edit',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
           
            [
                'name'      =>'Excluir um função',
                'resource'      =>'roles.destroy',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
            
            //users
            [
                'name'          => 'Listar os Usuários.',
                'resource'      =>'users.index',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
            [
                'name'      =>'Formulário Criar um novo Usuário.',
                'resource'      =>'users.create',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
           
            [
                'name'      =>'Visualizar um Usuário.',
                'resource'      =>'users.show',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
            [
                'name'      =>'Formulário edição de um Usuário',
                'resource'      =>'users.edit',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
           
            [
                'name'      =>'Excluir um Usuário',
                'resource'      =>'users.destroy',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
            //resources
            [
                'name'          => 'Listar os funções.',
                'resource'      =>'permissoes.index',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
            [
                'name'      =>'Formulário Criar uma nova função.',
                'resource'      =>'permissoes.create',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
            
            [
                'name'      =>'Visualizar uma função.',
                'resource'      =>'permissoes.show',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
            [
                'name'      =>'Formulário edição de uma função',
                'resource'      =>'permissoes.edit',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
                       
            [
                'name'      =>'Excluir uma função',
                'resource'      =>'permissoes.destroy',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],

            //TABELAS
            [
                'name'          => 'Listar as tabelas do banco de dados.',
                'resource'      =>'tabelas.index',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 4
            ],
            [
                'name'      =>'Formulário Criar uma nova tabela.',
                'resource'      =>'tabelas.create',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 4
            ],
            
            [
                'name'      =>'Visualizar uma tabela.',
                'resource'      =>'tabelas.show',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 4
            ],
            [
                'name'      =>'Formulário edição de uma tabela',
                'resource'      =>'tabelas.edit',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 4
            ],
           
            [
                'name'      =>'Excluir uma tabela',
                'resource'      =>'tabelas.destroy',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 4
            ],
        ]);
    }
}
