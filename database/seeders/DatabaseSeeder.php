<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $data = new User;
        $data->name = "admindulfajar1";
        $data->email = "warangkaer@warangkaer.com";
        $data->password = Hash::make('durenenak345');
        $data->save();
    }
}
