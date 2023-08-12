<?php

namespace Database\Seeders;

use App\Models\Standard;
use Filament\Notifications\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = collect();

        for ($i=0; $i < 10; $i++) { 
           $data->push([
                'name' =>"$i",
                'class_number' => $i
           ]);
        }
        Standard::factory()->createMany($data);
    }
}
