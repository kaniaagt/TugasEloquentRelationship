<?php

namespace Database\Seeders;

use App\Models\Nik;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory(10)->create()->each(
            function ($user) {
                // get from nik Model
                Nik::create([
                    'user_id' => $user->id,
                    'nik' => fake()->unique()->numerify('################')
                ]);
            }
        );
    }
}
