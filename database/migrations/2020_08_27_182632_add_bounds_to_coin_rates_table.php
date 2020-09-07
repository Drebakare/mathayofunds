<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBoundsToCoinRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coin_rates', function (Blueprint $table) {
            $table->string('variation')->nullable(false);
            $table->double('min')->nullable(false);
            $table->double('max')->nullable(false);
            $table->boolean('active')->nullable(false)->default(true);
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
            $table->dropColumn(['variation', 'min', 'max', 'active']);
        });
    }
}
