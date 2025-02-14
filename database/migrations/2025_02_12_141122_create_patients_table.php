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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->date('consultation_date')->nullable();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->date('birth_date')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('contact')->nullable();
            $table->integer('pwd_id')->nullable();
            $table->string('sex')->nullable();
            $table->double('weight')->nullable();
            $table->double('height')->nullable();
            $table->double('bmi')->nullable();
            $table->string('region_code')->nullable();
            $table->string('province_code')->nullable();
            $table->string('municipality_code')->nullable();
            $table->string('barangay')->nullable();
            $table->string('house_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
