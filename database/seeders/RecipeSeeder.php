<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = [
            [
                'title' => 'Sexy ramen',
                'story' => 'Sexy',
                'photo' => '1234'

            ],
            [
                'title' => 'Sexier ramen',
                'story' => 'Sexier',
                'photo' => '1234'
            ],
            [
                'title' => 'Rump of ramen',
                'story' => 'Bottom',
                'photo' => '1234'
            ],
            [
                'title' => 'Spaghetti and chips',
                'story' => 'Carbs',
                'photo' => '1234'
            ],
            [
                'title' => "Mum's spaghetti and crisps",
                'story' => 'Yum',
                'photo' => '1234'
            ],
            [
                'title' => 'Sus Spag',
                'story' => 'Sus',
                'photo' => '1234'
            ]
        ];

        foreach ($recipes as $recipe) {
            DB::table('recipes')->insert(
                [
                    'title' => $recipe['title'],
                    'story' => $recipe['story'],
                    'main_photo' => $recipe['photo'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }
    }
}
