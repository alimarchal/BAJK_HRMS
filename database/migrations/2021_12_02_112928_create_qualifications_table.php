<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('degree_name')->nullable(); // year of education
            $table->string('degree_qualification_name')->nullable();
            $table->string('institute_name')->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->string('total_score')->nullable();
            $table->string('obtain_score')->nullable();
            $table->string('division')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('field_subject')->nullable();
            $table->string('major_specialization')->nullable();
            $table->string('national_foreign')->nullable();
            $table->string('country')->default('Pakistan');
            $table->string('province_state')->nullable();
            $table->string('district_city_location')->nullable();
            $table->string('degree_status')->nullable();
            $table->string('verified_from_hec')->default('No');

            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualifications');
    }
}
