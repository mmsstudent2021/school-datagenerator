<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                "title" => "Web Development Foundation",
                "short" => "WDF",
                "fee" => 0
            ],
            [
                "title" => "Basic UI Design",
                "short" => "BUD",
                "fee" => 80000
            ],
            [
                "title" => "Special Web Design",
                "short" => "SWD",
                "fee" => 300000
            ],
            [
                "title" => "Web Application Development",
                "short" => "WAD",
                "fee" => 300000
            ],
            [
                "title" => "Premium UI Design",
                "short" => "PUD",
                "fee" => 300000
            ],
        ];

        foreach($courses as $course) {
            Course::create($course);
        }
    }
}
