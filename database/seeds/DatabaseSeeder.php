<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // test
        Model::unguard();
        $this->call('SamplesTableSeeder');

        // $this->call(UsersTableSeeder::class);
    }
}
