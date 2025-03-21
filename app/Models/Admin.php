<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    public function assets()
    {
        return $this->hasMany(Asset::class, 'created_by');
    }

    public function custodians()
    {
        return $this->hasMany(Custodian::class, 'created_by');
    }

    public function usageHistories()
    {
        return $this->hasMany(UsageHistory::class);
    }
}
