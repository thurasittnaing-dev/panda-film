<?php

namespace Database\Seeders;

use App\Models\VideoQuality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoQualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => "SD",
                'description' => "Standard Definition 480p 4:3",
                'created_by' => 1
            ],
            [
                'name' => "HD",
                'description' => "High Definition 720p 16:9",
                'created_by' => 1
            ],
            [
                'name' => "FHD",
                'description' => "Full HD 1080p 16:9",
                'created_by' => 1
            ],
            [
                'name' => "2K",
                'description' => "2K Resolution 1440p 16:9",
                'created_by' => 1
            ],
            [
                'name' => "4K",
                'description' => "4K Resolution 2160p 16:9",
                'created_by' => 1
            ]
        ];

        foreach ($data as $quality) VideoQuality::create($quality);
    }
}
