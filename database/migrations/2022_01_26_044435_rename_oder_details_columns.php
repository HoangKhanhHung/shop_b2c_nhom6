<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameOderDetailsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_details', function(Blueprint $table) {
            $table->renameColumn('product_is', 'product_id');
        });
    }


    public function down()
    {
        Schema::table('order_details', function(Blueprint $table) {
            $table->renameColumn('product_id', 'product_is');
        });
    }
}
