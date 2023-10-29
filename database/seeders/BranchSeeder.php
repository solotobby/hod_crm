<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branches = [
            ['name' => 'Ikeja - HQ'],
            ['name' => 'London'],
            ['name' => 'Arepo'],
            ['name' => 'Abeokuta'],
            ['name' => 'Lekki']
        ];

        foreach($branches as $branch){
            Branch::updateOrCreate($branch);
        }
    }
}
