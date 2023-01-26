<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('comics_db');

        foreach($data as $row){
            $newComic = new Comic();
            $newComic->title = $row['title'];
            $newComic->description = $row['description'];
            $newComic->thumb = $row['thumb'];
            $newComic->price = $row['price'];
            $newComic->series = $row['series'];
            $newComic->sale_date = $row['sale_date'];
            $newComic->type = $row['type'];
            $newComic->save();
        }
    }
}
