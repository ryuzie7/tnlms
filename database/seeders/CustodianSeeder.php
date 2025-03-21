<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Custodian;

class CustodianSeeder extends Seeder
{
    public function run()
    {
        Custodian::create([
            'name' => 'John Doe',
            'contact_number' => '0123456789',
            'email' => 'custodian@example.com',
            'created_by' => 1, // Make sure an admin exists
        ]);
    }
}
