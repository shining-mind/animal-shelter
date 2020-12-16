<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_image', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_id')
                ->constrained('pet')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('url', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_image');
    }
}
