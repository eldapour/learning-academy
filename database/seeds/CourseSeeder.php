<?php

use Illuminate\Database\Seeder;
use App\Course;
use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($i=1; $i <= 3 ; $i++) {
//            for ($j=1; $j <= 9 ; $j++) {
//                Course::create([
//                    'cat_id' => $i,
//                    'trainer_id' => rand( 1, 5),
//                    'name' => "category $i course $j",
//                    'small_desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel rerum, hic consequatur amet quasi distinctio deleniti eos dolorum libero',
//                    'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel rerum, hic consequatur amet quasi distinctio deleniti eos dolorum libero ab minima quis suscipit autem ea perspiciatis nam animi in? Inventore.',
//                    'price' => rand(1000, 5000),
//                    'img' => "$i$j.png"
//                ]);
//            }
//        }
    }
}

