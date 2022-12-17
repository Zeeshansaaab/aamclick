<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfitTracker extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'transaction_id', 'created_at'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function transaction(){
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
