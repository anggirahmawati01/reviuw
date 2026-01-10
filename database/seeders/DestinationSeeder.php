<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        Destination::create([
            'name' => 'Bukit Sasak',
            'location' => 'Lombok Barat, NTB',
            'description' => 'Bukit Sasak merupakan destinasi wisata alam yang menawarkan pemandangan indah.',
            'image' => 'bukit-sasak.jpg'
        ]);

        Destination::create([
            'name' => 'Bukit Tembesi',
            'location' => 'Sembalun, Lombok Timur, NTB',
            'description' => 'Puncak Tembesi menyuguhkan panorama danau serta pegunungan.',
            'image' => 'bukit-tembesi.jpg'
        ]);

        Destination::create([
            'name' => 'Pantai Seger',
            'location' => 'Lombok Tengah, NTB',
            'description' => 'Pantai Seger berada di kawasan Mandalika dengan pasir putih.',
            'image' => 'pantai-seger.jpg'
        ]);
    }
}
