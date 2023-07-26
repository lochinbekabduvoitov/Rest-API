<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qizil',
                'en' => "red"
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'Yo\'goch',
                'en' => "Woden"
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Jigarrang',
                'en' => "brown"
            ]
        ]);

        Value::create([
            'attribute_id' => 3,
            'name' => [
                'uz' => 'Qora',
                'en' => "Black"
            ]
        ]);
    }
}
