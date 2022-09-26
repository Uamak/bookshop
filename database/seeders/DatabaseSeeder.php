<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        DB::table('suppliers')->insert([
            'first_name' => Str::random(10),
            'last_name'  => Str::random(10),
            'telephone'  =>  Str::random(10),
            'address'    =>  Str::random(10),
            'email' => Str::random(10).'@gmail.com',
        ]);
    }
}
