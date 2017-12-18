<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('form_type');
            $table->bigInteger('form_subtype')->nullable();
            $table->mediumText('form_title');
            $table->longText('form_body')->nullable();
            $table->dateTime('form_date')->nullable();
            $table->bigInteger('form_active');
            $table->bigInteger('form_created_by');
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
        Schema::dropIfExists('forms');
    }
}
