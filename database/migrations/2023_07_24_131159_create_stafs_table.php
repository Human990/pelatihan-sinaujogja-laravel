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
        Schema::create('staf', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nip')->nullable();
            $table->string('nama')->nullable();
            $table->boolean('jenis_kelamin')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
            $table->timestamps();
            $table->integer('id_divisi');
            $table->foreign('id_divisi')
            ->references('id')
            ->on('divisi')
            ->restrictOnUpdate()
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staf');
    }
};
