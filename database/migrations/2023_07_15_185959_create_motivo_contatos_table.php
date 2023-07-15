<?php

use App\MotivoContato;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotivoContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivo_contatos', function (Blueprint $table) {
            $table->id();
            $table->string('motivo_contato', 20);
            $table->timestamps();
        });

        // MotivoContato::Create(['motivo_contato' => 'Dúvida']);
        // MotivoContato::Create(['motivo_contato' => 'Elogio']);
        // MotivoContato::Create(['motivo_contato' => 'Reclamação']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motivo_contatos');
    }
}
