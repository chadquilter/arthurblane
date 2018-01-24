<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('item_name');
            $table->longText('item_summary');
            $table->decimal('item_weight', 8, 2);
            $table->decimal('item_amount', 10, 2);
            $table->bigInteger('item_count');
            $table->boolean('item_in_stock');
            $table->boolean('item_has_address');
            $table->boolean('item_online_price');
            $table->boolean('item_has_subitems');
            $table->boolean('item_is_oversized');
            $table->boolean('item_has_image');
            $table->boolean('item_active');
            $table->Integer('user_id');
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
        Schema::dropIfExists('items');
    }
}
