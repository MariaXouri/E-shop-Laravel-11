<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detail;
class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detail::create([
            'jewel_id' => '21',
            'material' => json_encode([
                'Beads',
                'Pearls'
            ]),
            'description' => 'Necklace made with beads and pearls with multiple colors.',

        ]);

        Detail::create([
            'jewel_id' => '22',
            'material' => json_encode([
                'Beads',
                'Pearls'
            ]),
            'description' => 'Necklace made with beads and pearls.',

        ]);

        Detail::create([
            'jewel_id' => '23',
            'material' => json_encode(['Pearls']),
            'description' => 'Necklace made with pearls.',

        ]);

        Detail::create([
            'jewel_id' => '24',
            'material' => json_encode(['Pearls']),
            'description' => 'Necklace made with pearls.',

        ]);

        Detail::create([
            'jewel_id' => '25',
            'material' => json_encode(['Pearls']),
            'description' => 'Necklace made with pearls.',

        ]);

        Detail::create([
            'jewel_id' => '26',
            'material' => json_encode(['Pearls']),
            'description' => 'Necklace made with pearls.',

        ]);


        Detail::create([
            'jewel_id' => '27',
            'material' => json_encode(['Pearls']),
            'description' => 'Necklace made with pearls.',

        ]);

        Detail::create([
            'jewel_id' => '28',
            'material' => json_encode(['Pearls']),
            'description' => 'Necklace made with pearls.',

        ]);
    }
}
