<?php

namespace Database\Seeders;

use App\Models\Projects\Activity;
use App\Models\Projects\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory()->has(Activity::factory()->count(15), 'activities')
            ->make();
    }
}
