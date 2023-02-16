<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        Schema::create('portflios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->default(Auth::guard('web')->id());
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_title_desc')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('course_name')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('udemy_link')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_desc')->nullable();
            $table->string('contact_country')->nullable();
            $table->string('contact_mail')->nullable();
            $table->string('contact_phone')->nullable();
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
        Schema::dropIfExists('portflios');
    }
};
