<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetToTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_to_tag', function (Blueprint $table) {
            $table->foreignId('pet_id')->constrained('pet')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('pet_tag')->onUpdate('cascade')->onDelete('restrict');
            $table->primary(['pet_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_to_tag');
    }
}
