<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_evento');
            $table->string('precio');
            $table->integer('cantidad');
            $table->foreignId('categories_id')->constrained();
            $table->text('imagen');
            $table->string('descripcion');
            $table->string('lugar');
            $table->date('fecha');
            $table->time('hora');
            $table->string('tipo');
            $table->string('publico');
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
        Schema::dropIfExists('events');
    }
}
