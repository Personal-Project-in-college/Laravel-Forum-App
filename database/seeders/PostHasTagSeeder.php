<?php

namespace Database\Seeders;

use App\Models\PostHasTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostHasTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostHasTag::factory(10)->create();
    }
}
