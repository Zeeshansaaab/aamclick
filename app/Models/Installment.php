<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','email','screenshot','address','status', 'amount'];
    public function scopeIsActive($query)
    {
        $query->where('status', 1);
    }
}
