<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('orders', function (Blueprint $table) {
        $table->dropColumn(['client_id', 'waiter_id']);
      });

      Schema::table('orders', function (Blueprint $table) {
          $table->unsignedInteger('client_id')->unsigned();
          $table->unsignedInteger('waiter_id')->unsigned();
          $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('waiter_id')->references('id')->on('users')->onDelete('cascade');
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
