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
        Schema::disableForeignKeyConstraints();

        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->foreignId('form_group_id')->constrained();
            $table->string('name', 500);
            $table->string('des', 200);
            $table->string('is_guest');
            $table->string('is_enable');
            $table->string('limit_time');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('is_enabled');
            $table->json('fields');
            $table->json('search_field');
            $table->json('status');
            $table->string('code_start', 40);
            $table->string('code_leading_zero_length');
            $table->string('default_status', 50);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
