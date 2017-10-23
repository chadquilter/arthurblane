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
          $table->increments('id');
          $table->mediumText('title');
          $table->mediumText('phone');
          $table->mediumText('notes');
          $table->mediumText('email');
          $table->longText('description');
          $table->longText('identifier');
          $table->boolean('display_web');
          $table->boolean('address');
          $table->boolean('items');
          $table->boolean('jobs');
          $table->boolean('active');
          $table->float('guestimate_amount', 9, 2);
          $table->Integer('user_id');
          $table->bigInteger('created_by');
          $table->bigInteger('modified_by');
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
