<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public function user_id(){
        return $this->belongsTo(User::class);
    }

    protected $guarded = [];

    public function currency(){
        return $this->belongsTo(Currency::class);
    }
}
