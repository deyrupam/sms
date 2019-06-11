<?php

use Illuminate\Database\Seeder;
Use App\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       // $user = factory(App\User::class,5)->create();
          factory(App\Student::class,10)->create();

    }

}
