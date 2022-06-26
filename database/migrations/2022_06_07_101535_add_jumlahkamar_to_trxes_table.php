<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJumlahkamarToTrxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trxes', function (Blueprint $table) {
            $table->integer('jumlahkamar')->after('hargatotal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trxes', function (Blueprint $table) {
            $table->dropColumn('jumlahkamar');
        });
    }
}