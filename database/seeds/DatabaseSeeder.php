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
        //$users =
  $users =    [
              ['name' => 'Fedor Nikolaevich', 'email' => 'fed@ukr.net', 'password' => bcrypt('000000'), 'role' =>'user'],
              ['name' => 'Vasiliy', 'email' => 'vasiliy@ukr.net', 'password' => bcrypt('000000'), 'role' =>'superadmin'],
              ['name' => 'Genadiy', 'email' => 'gena@ukr.net', 'password' => bcrypt('000000'), 'role' =>'admin'],
              ['name' => 'Petr', 'email' => 'petr@ukr.net', 'password' => bcrypt('000000'), 'role' =>'manager'],
              ['name' => 'Eugeniy', 'email' => 'genya@ukr.net', 'password' => bcrypt('000000'),'role' =>'user']
            ];
        DB::table('users')->insert($users);
    }
}
