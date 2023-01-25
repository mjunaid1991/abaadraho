<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVoucher extends Model
{
    public $table = "user_voucher";
    
    protected $fillable = [
        "user_id",
        "voucher_id",
        "redeemed_at",
    ];
}
