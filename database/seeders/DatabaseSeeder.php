<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call([
            StudentSeeder::class,
<<<<<<< HEAD
            DepartmentSeeder::class,
            LecturerSeeder::class,
=======
>>>>>>> 035bb36a9d1b03611d34fa03981d20d296b14206
      ]);
    }
}