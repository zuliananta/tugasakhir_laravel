<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
          'nama' => 'Administrator',
          'username' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt(12345678)
        ]);
    }
}
