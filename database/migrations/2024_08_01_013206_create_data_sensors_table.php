<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('data_sensors', function (Blueprint $table) {
        $table->id();
        $table->integer('ketinggian');
        $table->float('suhu');
        $table->float('latitude');
        $table->float('longitude');
        $table->string('status');
        $table->string('cuaca');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_sensors');
    }
};
