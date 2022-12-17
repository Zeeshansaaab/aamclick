<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsToMany(User::class, 'committee_members');
    }
    
    public function committeePlan(){
        return $this->belongsTo(CommitteePlan::class,'committee_plan_id');
    }

    public function committeeInstallments(){
        return $this->hasMany(CommitteeInstallment::class);
    }
    
    public function scopeActive($query){
        $query->whereStatus(1);
    }

}
