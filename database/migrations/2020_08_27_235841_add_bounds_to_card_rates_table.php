<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBoundsToCardRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('card_rates', function (Blueprint $table) {
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
        Schema::table('card_rates', function (Blueprint $table) {
            $table->dropColumn(['variation', 'max', 'min', 'cardable_id', 'cardable_type', 'active']);
        });
    }
}
