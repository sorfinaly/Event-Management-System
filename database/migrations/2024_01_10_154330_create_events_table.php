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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->enum('priced_event', ['free', 'paid'])->nullable(); // Free or Paid event
            $table->decimal('fee', 8, 2)->nullable(); // Nullable fee column
            $table->date('event_date')->nullable();
            $table->string('location');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('event_category')->nullable();
            $table->string('event_format')->nullable();
            $table->text('event_description');
            $table->string('event_file')->nullable(); // This column will store the path to the file
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
