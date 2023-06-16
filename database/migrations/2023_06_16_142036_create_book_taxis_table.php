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
        Schema::create('book_taxis', function (Blueprint $table) {
            $table->id();
            $table->string('from_des');
            $table->string('to_des');
            $table->text('date_time');
            $table->integer('vehicle_id');
            $table->integer('user_id');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_taxis');
    }
};
