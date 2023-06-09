<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    public function getData(): array 
    {
        $faker = Factory::create();
        $data = [];

        for($i=0; $i<4; $i++) {
            $data[] = [
                'title' => $faker->sentence(mt_rand(3, 10)),
                'description' => $faker->text(150),
                'created_at' => now(),
                'updated_at' => now() 
            ];
        }
        return $data;
    }
}
