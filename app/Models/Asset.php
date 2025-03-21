<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial_number',
        'model',
        'location',
        'status',
        'custodian_id',
        'created_by'
    ];

    public function custodian()
    {
        return $this->belongsTo(Custodian::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function usageHistories()
    {
        return $this->hasMany(UsageHistory::class);
    }
}
