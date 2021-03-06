<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments("id");
            $table->timestamp("order_date")->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer("user_id")->unsigned();
            $table->float("subtotal", 99, 2)->default(0);
        });

        Schema::table("order", function(Blueprint $table){
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
