<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create(); // Create an instance of the Faker class

        $this->call([UserSeeder::class]);
        \App\Models\User::factory(10)->create();
        \App\Models\Contact::factory(10)->create();
        // \App\Models\Country::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Image::factory(10)->create();
        \App\Models\Video::factory(10)->create();
        \App\Models\Tag::factory(10)->create();

        $this->call([PostVideoSeeder::class]);


        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
