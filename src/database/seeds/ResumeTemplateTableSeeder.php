<?php

use App\ResumeTemplate;
use Illuminate\Database\Seeder;

class ResumeTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ResumeTemplate::class, 10)->create();
    }
}
