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
                'slug' => 'ux-design',
                'name' => 'UX Design'
            ],
            [
                'slug' => 'interaction-design',
                'name' => 'Interaction Design'
            ],
             [
                'slug' => 'wireframing-and-prototyping',
                'name' => 'Wireframing and Prototyping'
            ],
            [
                'slug' => 'visual-design',
                'name' => 'Visual Design'
            ],
             [
                'slug' => 'information-architecture',
                'name' => 'Information Architecture'
            ],
              [
                'slug' => 'user-research',
                'name' => 'User Research'
            ],
              [
                'slug' => 'accessibility-design',
                'name' => 'Accessibility Design'
            ],
            [
                'slug' => 'mobile-ux-design',
                'name' => 'Mobile UX Design'
            ],  
             [
                'slug' => 'voice-ux-design',
                'name' => 'Voice UX Design'
            ], 
            [
                'slug' => 'conversational-ux-design',
                'name' => 'Conversational UX Design'
            ],
             [
                'slug' => 'ar-ux-design',
                'name' => 'AR UX Design'
            ], 
            [
                'slug' => 'vr-ux-design',
                'name' => 'VR UX Design'
            ],  
        ]);
    }
}