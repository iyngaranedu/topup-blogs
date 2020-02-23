<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \Illuminate\Support\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i<=5; $i++) {
            DB::table('tbl_tags')->insert([
                'tag' => $faker->text(10),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        }
    }
}
