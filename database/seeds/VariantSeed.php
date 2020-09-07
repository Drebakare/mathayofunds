<?php

use Illuminate\Database\Seeder;

class VariantSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "ECODE", "section" => "CARD"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "Activation Receipt", "section" => "CARD"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "Cash Receipt", "section" => "CARD"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "Debit Receipt", "section" => "CARD"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "No Receipt", "section" => "CARD"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "Physical", "section" => "CARD"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "Fish", "section" => "COIN"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "Shark", "section" => "COIN"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "Whale", "section" => "COIN"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "Level 1", "section" => "COIN"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "Level 2", "section" => "COIN"]);
        \Illuminate\Support\Facades\DB::table('variants')->insert(["label" => "Level 3", "section" => "COIN"]);
    }
}
