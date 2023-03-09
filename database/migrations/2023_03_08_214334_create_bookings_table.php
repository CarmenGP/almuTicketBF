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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('userName');
            $table->string('category');
            $table->string('area');
            $table->string('location');
            $table->string('state');
            $table->date('date');
            $table->datetime('startTime');
            $table->datetime('endTime');
            $table->integer('numPeople');
            $table->string('room');
            $table->string('description');
            $table->string('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
