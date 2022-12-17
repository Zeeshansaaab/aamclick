<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitteeInstallment extends Model
{
    use HasFactory;
    public function committee(){
        return $this->belongsTo(Committee::class , 'committee_id');
    }

    public function user(){
        return $this->belongsTo(User::class , 'committee_id');
    }
}
