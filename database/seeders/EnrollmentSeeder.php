<?php

namespace Database\Seeders;

use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Retrieve all student and batch IDs
         $studentIds = Student::pluck('id')->toArray();
         $batchIds = Batch::pluck('id')->toArray();

         // Define the number of enrollments you want to seed
         $numberOfEnrollments = 200;

         for ($i = 0; $i < $numberOfEnrollments; $i++) {
             Enrollment::create([
                 'student_id' => rand(1, count($studentIds)), // Random student ID
                 'batch_id' => rand(1, count($batchIds)), // Random batch ID
             ]);
         }
    }
}
