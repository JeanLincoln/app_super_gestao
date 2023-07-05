<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            //colunas
            $table->id();
            $table->string('unidade', 5); // cm, mm, kg;
            $table->string('descricao', 30);
            $table->timestamps();

        });

        //adicionar o relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            //Inserindo coluna
            $table->unsignedBigInteger('unidade_id');
            //constraint
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        //adicionar o relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            //Inserindo coluna
            $table->unsignedBigInteger('unidade_id');
            //constraint
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover o relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            //remover a foreign key
            $table->dropForeign('produto_detalhes_unidade_id_foreign'); // [table]_[coluna]_foreign

            //remover a coluna
            $table->dropColumn('unidade_id');
        });

        //remover o relacionamento com a tabela produto_detalhes

        Schema::table('produtos', function (Blueprint $table) {
            //remover a foreign key
            $table->dropForeign('produtos_unidade_id_foreign'); // [table]_[coluna]_foreign

            //remover a coluna
            $table->dropColumn('unidade_id');

        });


        Schema::dropIfExists('unidades');
    }
}