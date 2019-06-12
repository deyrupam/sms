<?php

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
         // $this->call(UsersTableSeeder::class);
         // $user = factory(App\User::class,5)->create();
          //factory(App\Student::class,10)->create();
          //factory(App\Registration::class,10)->create();
          //factory(App\IClass::class,3)->create();
          factory(App\Section::class,20)->create();
    }

}
