<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocaisAcessiblidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locais_acessibilidades', function (Blueprint $table) {
            $table->increments('id');
            $table->json('acessibilidade');
            $table->decimal('lat', 10, 6);
            $table->decimal('lng', 10, 6);
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
        Schema::drop('locais_acessibilidades');
    }
}
