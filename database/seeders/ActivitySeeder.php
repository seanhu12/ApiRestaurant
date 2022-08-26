<?php

namespace Database\Seeders;

use App\Models\Projects\Activity;
use App\Models\Projects\Project;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Activity::factory()->count(250)->for(Project::factory())->create();
    }
}
