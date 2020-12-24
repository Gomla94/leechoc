<?php

use App\Model\HomeText;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hometext = new HomeText();
        $hometext->first_title = 'first title';
        $hometext->first_brief = 'first brief';
        $hometext->first_main_text = 'first main text';
        $hometext->second_title = 'second title';
        $hometext->second_main_text = 'second main text';
        $hometext->third_title = 'third title';
        $hometext->fourth_title = 'fourth title';
        $hometext->working_days = 'fourth title';
        $hometext->working_days_two = 'fourth title';
        $hometext->working_hours = 'fourth title';
        $hometext->working_hours_two = 'fourth title';
        $hometext->save();
    }
}
