<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('service_name');
            $table->timestamps();
        });

        DB::table('users')->insert(
          array(
            'service_name' => 'Custom Homes'
          ),(
            'service_name' => 'Custom Concrete'
          ),(
            'service_name' => 'Custom Kitchen and Bath'
          ),(
            'service_name' => 'Construction Management'
          ),(
            'service_name' => 'Excavation'
          ),(
            'service_name' => 'Concrete and Asphalt (structural and paving)'
          ),(
            'service_name' => 'Structural Steel'
          ),(
            'service_name' => 'Interior Finish Out'
          ),(
            'service_name' => 'Ground Up Construction'
          ),(
            'service_name' => 'Demolition'
          )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
