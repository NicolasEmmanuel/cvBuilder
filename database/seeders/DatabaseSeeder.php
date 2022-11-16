<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Profile;
use App\Models\Experience;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

       $user = \App\Models\User::factory()->create([
            'name' => 'user1',
            'email' => 'user@gmail.com',
     ]);

     $profile = Profile::factory()->create([
        'user_id'=>$user->id
     ]);

     Experience::factory(5)->create([
        'profile_id'=>$profile->id
     ]);

    }
}
