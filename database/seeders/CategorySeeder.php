<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'slug' => 'ui-design',
                'name' => 'UI Design'
            ],
            [
                'slug' => 'ux-research',
                'name' => 'UX Research'
            ],
             [
                'slug' => 'user-centered-design',
                'name' => 'User-Centered Design'
            ],
              [
                'slug' => 'interaction-design',
                'name' => 'Interaction Design'
            ],
              [
                'slug' => 'wireframing',
                'name' => 'Wireframing'
            ],
            [
                'slug' => 'prototyping',
                'name' => 'Prototyping'
            ],  
             [
                'slug' => 'usability-testing',
                'name' => 'Usability Testing'
            ], 
             [
                'slug' => 'information-architecture',
                'name' => 'Information Architecture'
            ], 
             [
                'slug' => 'visual-design',
                'name' => 'Visual Design'
            ], 
            [
                'slug' => 'user-journey-mapping',
                'name' => 'User Journey Mapping'
            ], 
            [
                'slug' => 'accessibility-in-design',
                'name' => 'Accessibility in Design'
            ], 
        ]);
    }
}