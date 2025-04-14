<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jewel;
class JewelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Jewel::create([
            'name' => 'Necklace 1',
            'description' => 'Necklace with purple elements.',
            'image' => '\images\Vector (1).png',
            'price' => '15'

        ]);

        Jewel::create([
            'name' => 'Necklace 2',
            'description' => 'Necklace with some elements',
            'image' => '\images\Component 1 (3).png',
            'price' => '17'

        ]);

        Jewel::create([
            'name' => 'Necklace 3',
            'description' => 'Necklace with some elements',
            'image' => '\images\Component 1 (1).png',
            'price' => '18'

        ]);

        Jewel::create([
            'name' => 'Necklace 4',
            'description' => 'Necklace with some elements',
            'image' => '\images\Component 2.png',
            'price' => '20'

        ]);

        Jewel::create([
            'name' => 'Necklace 5',
            'description' => 'Necklace with some elements',
            'image' => '\images\Component 2.png',
            'price' => '20'

        ]);

        Jewel::create([
            'name' => 'Necklace 5',
            'description' => 'Necklace with some elements',
            'image' => '\images\Component 2.png',
            'price' => '20'

        ]);
        Jewel::create([
            'name' => 'Necklace 5',
            'description' => 'Necklace with some elements',
            'image' => '\images\Component 2.png',
            'price' => '20'

        ]);
        Jewel::create([
            'name' => 'Necklace 5',
            'description' => 'Necklace with some elements',
            'image' => '\images\Component 2.png',
            'price' => '20'

        ]);
    }


}
