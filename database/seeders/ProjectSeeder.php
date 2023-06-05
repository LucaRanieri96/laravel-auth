<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    for ($i = 0; $i < 10; $i++) {
      $project = new Project();
      $project->name = $faker->sentence();
      $project->slug = Str::slug($project->name, '-');
      $project->repoUrl = Project::generateRepoUrl($project->slug);
      $project->startingDate = date("Y-m-d") . " " . date("H:i:s");
      $project->save();
    }
  }
}