<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_items', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('job_id');
            $table->Integer('items_id');
            $table->Integer('user_id');
            $table->decimal('amount', 8, 2);
            $table->Itenger('qty');
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
        Schema::dropIfExists('job_items');
    }
}
