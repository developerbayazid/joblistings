<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Bayazid',
            'last_name'  => 'Hasan',
            'email'      => 'bayazid@live.com',
        ]);

        Job::factory(300)->create();

        $this->call([
            JobSeeder::class,
        ]);
    }

}
