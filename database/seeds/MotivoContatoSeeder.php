<?php

use App\MotivoContato;
use Illuminate\Database\Seeder;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotivoContato::Create(['motivo_contato' => 'Dúvida']);
        MotivoContato::Create(['motivo_contato' => 'Elogio']);
        MotivoContato::Create(['motivo_contato' => 'Reclamação']);
    }
}
