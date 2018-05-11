<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('form_id');
            $table->Integer('address_id');
            $table->Integer('user_id');
            $table->Integer('uom_id');
            $table->decimal('units_traveled', 10, 2)->nullable();
            $table->decimal('fuel_cost', 10, 2)->nullable();
            $table->LongText('primary_group')->nullable();
            $table->LongText('secondary_group')->nullable();
            $table->boolean('primary_address')->nullable();
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
        Schema::dropIfExists('form_adresses');
    }
}
