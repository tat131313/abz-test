<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WorkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Worker');

        DB::table('workers')->insert([
            'name' => 'Albus Dumbledore',
            'position' => 'Headmaster',
            'employment_date' => $faker->date,
            'salary' => $faker->numberBetween($min = 10000, $max = 15000),
            'chief_id' => null,
            'hierarchy_level' => '1', 
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);

        for($i=0; $i<21; $i++){
            $name = "$faker->firstName" . " " . "$faker->lastName";

            DB::table('workers')->insert([
                'name' => $name,
                'position' => 'Dean',
                'employment_date' => $faker->date,
                'salary' => $faker->numberBetween($min = 8000, $max = 10000),
                'chief_id' => '1',
                'hierarchy_level' => '2', 
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ]);
        }

        for($i=0; $i<168; $i++){
            $name = "$faker->firstName" . " " . "$faker->lastName";

            DB::table('workers')->insert([
                'name' => $name,
                'position' => 'Head of the Department',
                'employment_date' => $faker->date,
                'salary' => $faker->numberBetween($min = 6000, $max = 8000),
                'chief_id' => $faker->numberBetween($min = 2, $max = 22),
                'hierarchy_level' => '3',  
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ]);
        }

        for($i=0; $i<2016; $i++){
            $name = "$faker->firstName" . " " . "$faker->lastName";

            DB::table('workers')->insert([
                'name' => $name,
                'position' => 'Curator',
                'employment_date' => $faker->date,
                'salary' => $faker->numberBetween($min = 5000, $max = 7000),
                'chief_id' => $faker->numberBetween($min = 23, $max = 190), 
                'hierarchy_level' => '4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ]);
        }

        for($i=0; $i<48384; $i++){
            $dt = $faker->dateTimeBetween($startDate = '-6 years', $endDate = 'now');
            $date = $dt->format("Y-m-d");

            $name = "$faker->firstName" . " " . "$faker->lastName";

            DB::table('workers')->insert([
                'name' => $name,
                'position' => 'Student',
                'employment_date' => $date,
                'salary' => $faker->numberBetween($min = 1300, $max = 2000),
                'chief_id' => $faker->numberBetween($min = 191, $max = 2206),
                'hierarchy_level' => '5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ]);
        }
    }
}
