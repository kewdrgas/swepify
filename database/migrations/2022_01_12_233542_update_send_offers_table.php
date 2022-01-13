<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSendOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('send_offers', function (Blueprint $table) {
            $table->integer('metraz')->after('offer_id');
            $table->string('adres')->after('offer_id');
            $table->string('zakres_uslug')->after('offer_id');
            $table->string('data')->after('offer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('send_offers', function (Blueprint $table) {
            $table->dropColumn('metraz');
            $table->dropColumn('adres');
            $table->dropColumn('zakres_uslug');
            $table->dropColumn('data');
        });
    }
}
