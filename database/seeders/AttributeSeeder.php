<?php

namespace Database\Seeders;

use App\Models\Attribute as ModelsAttribute;
use Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsAttribute::create(['name' => 'color']);
        ModelsAttribute::create(['name' => 'size']);
        ModelsAttribute::create(['name' => 'material']);
    }
}
