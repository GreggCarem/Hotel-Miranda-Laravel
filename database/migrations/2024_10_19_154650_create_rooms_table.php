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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('room_number')->unique();
            $table->enum('type_room',['Double Superior', 'Suite', 'Single Bed', 'Double Bed']);
            $table->text('description')->nullable(true);
            $table->boolean('offer')->default(false);
            $table->decimal('price',8,2);
            $table->unsignedTinyInteger('discount')->default(0);
            $table->text('cancellation')->nullable(true);
            $table->enum('status',['Available', 'Booked'])->default('Available');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
