<?php

namespace Database\Seeders;

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
        //valamint a megfelelő sorrendben hivatkozzon rájuk a DatabaseSeeder.php fájlban.

        $this->call([
            StudentSeeder::class,
            GradeSeeder::class
        ]);
    }
}
