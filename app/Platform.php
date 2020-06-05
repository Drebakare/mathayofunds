<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = [
        'name', 'wallet_address', 'token', 'qr_code', 'coin_id'
    ];

    public function coin(){
        return  $this->belongsTo(Coin::class);
    }
    public function coinSellings(){
        return  $this->hasMany(CoinSelling::class);
    }
}
