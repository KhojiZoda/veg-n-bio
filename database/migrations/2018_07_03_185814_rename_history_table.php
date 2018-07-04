<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('buyhistory');
      Schema::create('buy_histories', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('ingredient_id');
        $table->string('notes');
        $table->float('price', 8, 2);
        $table->integer('quantity');
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
        //
    }
}
