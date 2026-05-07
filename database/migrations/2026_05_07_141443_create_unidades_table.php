<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //criar a tabela unidades
        Schema::create('unidades', function (Blueprint $table) {

            //colunas
            $table->id();
            $table->string('unidade', 5); //cm, mm, kg
            $table->string('descricao', 30);
            $table->timestamps();
        });

        //adicionar o relacionamento com a tabela produt
        Schema::table('produt', function (Blueprint $table) {

            //coluna
            $table->unsignedBigInteger('unidade_id');

            //constraint
            $table->foreign('unidade_id')
                  ->references('id')
                  ->on('unidades');
        });

        //adicionar o relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {

            //coluna
            $table->unsignedBigInteger('unidade_id');

            //constraint
            $table->foreign('unidade_id')
                  ->references('id')
                  ->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //remover o relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {

            //remover a fk
            $table->dropForeign(['unidade_id']);

            //remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });

        //remover o relacionamento com a tabela produt
        Schema::table('produt', function (Blueprint $table) {

            //remover a fk
            $table->dropForeign(['unidade_id']);

            //remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });

        //remover a tabela unidades
        Schema::dropIfExists('unidades');
    }
};