<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class)->times(5)->create();
        //dd($users->toArray());
        //\App\Models\User::insert($users->toArray());
    }
}
