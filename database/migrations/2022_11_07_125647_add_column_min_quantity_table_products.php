<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //acessar a table "products", e nela criar uma coluna "min_quality"
        Schema::table('products', function(Blueprint $table) {
            $table->integer('min_quatity') //nome coluna
                ->default(1) //valor padrão coluna
                ->after('quantity'); //localização coluna
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //faz a exclusão desta coluna.
        Schema::table('products', function(Blueprint $table) {
            $table->dropColumn('min_quatity');
        });
    }
};
