<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Define the number of students you want to seed
        $numberOfStudents = 145;

        for ($i = 0; $i < $numberOfStudents; $i++) {
            $dateOfBirth = $faker->dateTimeBetween('-20 years', '-10 years')->format('Y-m-d');
            $age = \Carbon\Carbon::parse($dateOfBirth)->age;

            Student::create([
                'name' => $faker->name,
                'gender' => $faker->randomElement(['male', 'female']),
                'date_of_birth' => $dateOfBirth,
                'age' => $age,
                'nationality' => $faker->randomElement(['mm', 'kr', 'jp', 'th', 'ch']),
                'pocket_money' => $faker->numberBetween(100, 1000),
            ]);
        }
    }
}
