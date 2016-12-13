<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\User::create([
     'name' => 'Kevin Terpstra',
     'email' => 'kkterpstra93@gmail.com',
     'password' => bcrypt('kevin123'),
     'remember_token' => str_random(10),
      ]);

      App\User::create([
     'name' => 'Peter Westra',
     'email' => 'west1300@student.nhl.nl',
     'password' => bcrypt('peter123'),
     'remember_token' => str_random(10),
      ]);

      App\User::create([
     'name' => 'Paul Slotboom',
     'email' => 'slotboom93@gmail.com',
     'password' => bcrypt('paul123'),
     'remember_token' => str_random(10),
      ]);

      App\User::create([
     'name' => 'Michel van der Molen',
     'email' => 'michelvdmolen1@gmail.com',
     'password' => bcrypt('michel123'),
     'remember_token' => str_random(10),
      ]);

      App\User::create([
     'name' => 'Maikel Oppenhuizen',
     'email' => 'maikeloppie1991@gmail.com',
     'password' => bcrypt('maikel123'),
     'remember_token' => str_random(10),
      ]);
    }
}
