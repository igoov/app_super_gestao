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

            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        //relacionamento com produtos
        Schema::table('produtos', function (Blueprint $table) {

            $table->unsignedBigInteger('unidade_id');

            $table->foreign('unidade_id')
                  ->references('id')
                  ->on('unidades');
        });

        //relacionamento com produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {

            $table->unsignedBigInteger('unidade_id');

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
        //remover relacionamento produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {

            $table->dropForeign(['unidade_id']);
            $table->dropColumn('unidade_id');
        });

        //remover relacionamento produtos
        Schema::table('produtos', function (Blueprint $table) {

            $table->dropForeign(['unidade_id']);
            $table->dropColumn('unidade_id');
        });

        //remover tabela unidades
        Schema::dropIfExists('unidades');
    }
};