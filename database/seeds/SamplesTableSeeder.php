<?php
 
use Illuminate\Database\Seeder;
 
class SamplesTableSeeder extends Seeder
{
 
    public function run()
    {
        DB::table('samples')->truncate();
 
        DB::table('samples')->insert([
            [
                'title'      => 'TestA',
                'body'       => 'TestA body test.',
                'username'   => 'userA',
                'created_at' => '2016-08-12 14:00:00',
                'updated_at' => '2016-08-12 14:00:00',
            ],
            [
                'title'      => 'TestB',
                'body'       => 'TestB body test.',
                'username'   => 'userB',
                'created_at' => '2016-08-12 14:03:00',
                'updated_at' => '2016-08-12 14:03:00',
            ],
            [
                'title'      => 'TestC',
                'body'       => 'TestC body test.',
                'username'   => 'userC',
                'created_at' => '2016-08-12 14:06:00',
                'updated_at' => '2016-08-12 14:06:00',
            ],
        ]);
    }
}
