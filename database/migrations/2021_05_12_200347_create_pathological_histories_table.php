<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePathologicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pathological_histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("weight");
            $table->integer("height");
            $table->string('blood_type');
            $table->string('diabetic');
            $table->string('allergy_to_medical');
            $table->longText('allergy_to_medical_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('Lsugar_test');
            $table->string('blood_pressure_sys');
            $table->string('blood_pressure_dyas');
            $table->string('smoke')->nullable();
            $table->string('alcohol')->nullable();
            $table->longText('surgical_history')->nullable();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pathological_histories');
    }
}
