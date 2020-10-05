<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuestionCategory;

class QuestionCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionCategory::create([
            'name' => 'Technical'
        ]);
        QuestionCategory::create([
            'name' => 'Aptitude'
        ]);
        QuestionCategory::create([
            'name' => 'Logical'
        ]);
    }
}
