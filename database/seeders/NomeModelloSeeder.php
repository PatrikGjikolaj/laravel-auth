<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\Models\NomeModello;

class NomeModelloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $stacksData = config('store');


        for ($i = 0; $i < 10; $i++) {
            $newProject = new NomeModello();
            $newProject->name = $faker->domainName();
            $newProject->description = $faker->paragraphs(5, true);
            $newProject->image = "https://picsum.photos//600/600?random=1" . rand(1, 200);

            $newProject->save();
        }
    }
}
