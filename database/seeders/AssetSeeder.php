<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    public function run()
    {
        Asset::create([
            'serial_number' => 'SN001',
            'model' => 'Projector A100',
            'location' => 'Room 101',
            'status' => 'available',
            'custodian_id' => 1, // Make sure a custodian exists
            'created_by' => 1, // Make sure an admin exists
        ]);
    }
}
