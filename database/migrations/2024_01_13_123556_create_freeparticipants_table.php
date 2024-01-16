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
        Schema::create('freeparticipants', function (Blueprint $table) {
            $table->string('matric_id', 8);
            $table->string('full_name', 50);
            $table->string('email')->unique();
            $table->string('kuliyyah', 8);
            $table->string('phone_no', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freeparticipants');
    }
};
