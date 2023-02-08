<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_title_desc')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_desc')->nullable();
            $table->string('skill_id')->nullable();
            $table->string('project_id')->nullable();
            $table->string('services_title')->nullable();
            $table->string('services_desc')->nullable();
            $table->string('contact_country')->nullable();
            $table->string('contact_mail')->nullable();
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
        Schema::dropIfExists('profile');
    }
};
