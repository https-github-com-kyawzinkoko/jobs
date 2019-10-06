<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->string('type');
            $table->string('company');
            $table->string('logo');
            $table->string('url');
            $table->string('position');
            $table->string('location');
            $table->text('description')->nullable();
            $table->text('how_to_apply')->nullable();
            $table->string('token');
            $table->boolean('public');
            $table->boolean('activated');
            $table->string('email');
            $table->dateTime('expries_at');
            $table->unsignedInteger('category_id');
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
        Schema::dropIfExists('jobs');
    }
}
