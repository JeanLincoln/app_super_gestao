<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SiteContato::class, 100)->create();

        // $contato = new SiteContato();
        // $contato->nome = 'Sistemas SG';
        // $contato->telefone = '(11) 99999-8888';
        // $contato->email = 'contato@sg.com.br';
        // $contato->motivo_contato = 1;
        // $contato->mensagem = 'Seja bem-vind ao sistema Super Gestao';
        // $contato->save();
    }
}
