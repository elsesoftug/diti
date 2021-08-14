<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name');
            $table->text('unit');
            $table->string('category');
            $table->bigInteger('buying_price');
            $table->integer('quantity');
            $table->text('description');

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
        Schema::dropIfExists('stock_tables');
    }
}
