<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(TrainerSeeder::class);
        $this->call(SiteContentSeeder::class);
        $this->call(CatSeeder::class);
//        $this->call(CourseStudentSeeder::class);
        $this->call(TrainerSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
