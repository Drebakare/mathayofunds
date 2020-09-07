<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeVariationFieldOnCoinsRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coin_rates', function (Blueprint $table) {
            $table->renameColumn('variation', 'variant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coin_rates', function (Blueprint $table) {
            $table->renameColumn('variant' ,'variation');
        });
    }
}
