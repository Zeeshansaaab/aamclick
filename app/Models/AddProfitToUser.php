<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProfitToUser extends Model
{
    use HasFactory;
    // protected $fillable = ['user_id','deposit_id','approve_date','deposit_date','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function deposit()
    {
        return $this->belongsTo(Deposit::class,'deposit_id');
    }
}
