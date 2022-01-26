<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameOdersColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oders', function(Blueprint $table) {
            $table->renameColumn('user_is', 'user_id');
        });
    }


    public function down()
    {
        Schema::table('oders', function(Blueprint $table) {
            $table->renameColumn('user_id', 'user_is');
        });
    }
}
