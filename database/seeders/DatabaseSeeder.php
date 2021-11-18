<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            ['text' => 'Text 1'],
            ['text' => 'Text 2'],
            ['text' => 'Text 3'],
        ]);
        // $this->call('UsersTableSeeder');
    }
}
