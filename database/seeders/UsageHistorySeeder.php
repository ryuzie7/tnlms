<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UsageHistory;

class UsageHistorySeeder extends Seeder
{
    public function run()
    {
        UsageHistory::create([
            'asset_id' => 1, // Ensure an asset exists
            'admin_id' => 1, // Ensure an admin exists
            'custodian_id' => 1, // Ensure a custodian exists
            'assigned_at' => now(),
            'returned_at' => null,
            'notes' => 'Initial assignment for testing.',
        ]);
    }
}
