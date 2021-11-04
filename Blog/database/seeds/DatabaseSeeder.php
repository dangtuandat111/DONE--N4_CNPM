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
        DB::table('users')->insert([
            [
            'FirstName' => 'Nguyen',
            'LastName' => 'Van B',
            'Email' => 'BM.MHT.UTC.2021@gmail.com',
            'Password' => bcrypt('123')]
        ]);
    }
}
