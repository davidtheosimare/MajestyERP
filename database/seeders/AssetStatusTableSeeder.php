<?php

namespace Database\Seeders;

use App\Models\AssetStatus;
use Illuminate\Database\Seeder;

class AssetStatusTableSeeder extends Seeder
{
    public function run()
    {
        $assetStatuses = [
            [
                'id'         => 1,
                'name'       => 'Available',
                'created_at' => '2023-06-28 17:07:26',
                'updated_at' => '2023-06-28 17:07:26',
            ],
            [
                'id'         => 2,
                'name'       => 'Not Available',
                'created_at' => '2023-06-28 17:07:26',
                'updated_at' => '2023-06-28 17:07:26',
            ],
            [
                'id'         => 3,
                'name'       => 'Broken',
                'created_at' => '2023-06-28 17:07:26',
                'updated_at' => '2023-06-28 17:07:26',
            ],
            [
                'id'         => 4,
                'name'       => 'Out for Repair',
                'created_at' => '2023-06-28 17:07:26',
                'updated_at' => '2023-06-28 17:07:26',
            ],
        ];

        AssetStatus::insert($assetStatuses);
    }
}
