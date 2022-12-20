<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\CommitteeMember;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $fillable = ['last_withdraw', 'user_profit_bonus'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'address' => 'object',
        'kyc_data' => 'object',
        'ver_code_send_at' => 'datetime'
    ];

    //auth()->user()->committess();


    public function committees(){
        return $this->belongsToMany(Committee::class, 'committee_members');
    }
    
    public function committeeMembers(){
        return $this->hasManyThrough(CommitteeMember::class, CommitteeInstallment::class, 'committee_member_id', 'user_id');
    }

    public function scopeIsActive($query)
    {
        $query->where('status', 1);
    }

    public function remainingCommittee()
    {
        foreach($this->committeeMembers as $member){
            $validity = $member->committee->validity;
            $totalInstallments = $member->installmets->count('*');
            if($validity > $totalInstallments){
                return true;
            }
        }
        return false;
    }

    public function loginLogs()
    {
        return $this->hasMany(UserLogin::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class)->orderBy('id','desc');
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class)->where('status','!=',0);
    }


    public function referrals()
    {
       return User::where('ref_by',$this->id);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class)->where('status','!=',0);
    }

    public function fullname(): Attribute
    {
        return new Attribute(
            get: fn () => $this->firstname . ' ' . $this->lastname,
        );
    }


    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function commissions()
    {
        return $this->hasMany(CommissionLog::class);
    }
    public function profitTrackers()
    {
        return $this->hasMany(ProfitTracker::class);
    }


    public function refBy()
    {
        return $this->belongsTo(User::class,'ref_by');
    }     

    // SCOPES
    public function scopeActive()
    {
        return $this->where('status', 1);
    }

    public function scopeBanned()
    {
        return $this->where('status', 0);
    }

    public function scopeEmailUnverified()
    {
        return $this->where('ev', 0);
    }

    public function scopeMobileUnverified()
    {
        return $this->where('sv', 0);
    }

    public function scopeKycUnverified()
    {
        return $this->where('kv', 0);
    }

    public function scopeKycPending()
    {
        return $this->where('kv', 2);
    }

    public function scopeEmailVerified()
    {
        return $this->where('ev', 1);
    }

    public function scopeMobileVerified()
    {
        return $this->where('sv', 1);
    }

    public function scopeWithBalance()
    {
        return $this->where('balance','>', 0);
    }

}
