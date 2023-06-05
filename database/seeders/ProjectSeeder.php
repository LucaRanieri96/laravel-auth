<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
      $project->slug = Project::slug($project->title, '-');
      $project->repoUrl = Project::generateRepoUrl($project->slug);
      $project->startingDate = date("Y-m-d") . date("H:i:s");
      $project->save();
    }
  }
}