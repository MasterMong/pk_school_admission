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

        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('cid', 13);
            $table->string('prefix', 50);
            $table->string('fname', 100);
            $table->string('mname', 100);
            $table->string('lname', 100);
            $table->json('data');
            $table->foreignId('form_responses_id')->constrained('form_responses');
            $table->foreignId('student_id');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
