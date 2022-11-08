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
        Schema::create('products', function (Blueprint $table) {
            //id do registro, autoincrement e primary-key
            $table->id();
            // Nome do produto (name) - string
            $table->string('name');
            // Código do produto (code) - string - não pode se repetir
            $table->string('code')->unique();
            // quantidade do produto (quantity) - string - default 0
            $table->integer('quantity')->default(0);
            // observações do produto (obs) - text - pode ser null
            $table->text('obs')->nullable();

            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
