<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'book_id' => 1,
            'title' => '坊ちゃん',
            'price' => 500,
        ];
        DB::table('books')->insert($param);
    }
}
