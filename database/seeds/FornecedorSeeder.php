<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Formas de inserir os registros no db:
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor.com.br';
        $fornecedor->save();

            Fornecedor::create(['nome'=> 'Fornecedor 200',
            'site'=> 'fornecedor200.com.br',
            'uf'=> 'SP',
            'email'=> 'fornecedor200@fornecedor.com.br']);

            DB::table('fornecedores')->insert(
            ['nome'=> 'Fornecedor 300',
            'site'=> 'fornecedor300.com.br',
            'uf'=> 'SP',
            'email'=> 'fornecedor300@fornecedor.com.br']);

    }
}