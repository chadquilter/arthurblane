<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('form_items', function (Blueprint $table) {
          $table->increments('form_items_form_id');
          $table->Integer('form_id');
          $table->Integer('items_id');
          $table->Integer('user_id');
          $table->LongText('primary_group')->nullable();
          $table->LongText('secondary_group')->nullable();
          $table->boolean('removed')->nullable();
          $table->boolean('primary_total')->nullable();
          $table->boolean('discount')->nullable();
          $table->decimal('amount', 8, 2)->nullable();
          $table->Integer('qty')->nullable();
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
      Schema::dropIfExists('form_items');
    }
}
