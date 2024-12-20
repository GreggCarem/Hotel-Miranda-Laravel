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
            $table->string('guest')->default('1'); // Adjusted with a default value
            $table->dateTime('orderdate')->useCurrent();
            $table->dateTime('checkin');
            $table->dateTime('checkout');
            $table->text('specialrequest')->nullable();
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->enum('status', ['In Progress', 'Check Out', 'Check In']);
            $table->timestamps();
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
