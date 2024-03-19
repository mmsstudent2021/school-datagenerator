<?php

namespace Database\Seeders;

use App\Models\Batch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batches = [
            [
                "name" => "SWD JAN 2024",
                "course_id" => 3,
                "start_date" => "2024-01-27",
                "start_time" => "15:00:00",
                "end_time" => "17:00:00",
                "is_register_open" => false,
                "student_limit" => 45
            ], [
                "name" =>  "WAD FEB 2024",
                "course_id" => 4,
                "start_date" => "2024-02-07",
                "start_time" => "13:00:00",
                "end_time" => "15:00:00",
                "is_register_open" => false,
                "student_limit" => 30
            ], [
                "name" => "BUD MAR 2024",
                "course_id" => 3,
                "start_date" => "2024-03-23",
                "start_time" => "13:00:00",
                "end_time" => "15:00:00",
                "is_register_open" => true,
                "student_limit" => 70
            ], [
                "name" => "PUD APR 2024",
                "course_id" => 3,
                "start_date" => "2024-04-05",
                "start_time" => "09:00:00",
                "end_time" => "11:00:00",
                "is_register_open" => true,
                "student_limit" => 25
            ]
        ];
        foreach ($batches as $batch) {
            Batch::create($batch);
        }
    }
}
