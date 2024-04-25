<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $movies = [
            [
                'code' => 'MOV1',
                'name' => 'Doraemon',
                'stock_dvd' => 3,
                'price' => 5000,
            ],
            [
                'code' => 'MOV2',
                'name' => 'Titanic',
                'stock_dvd' => 1,
                'price' => 12500,
            ],
            [
                'code' => 'MOV3',
                'name' => 'Avenger',
                'stock_dvd' => 5,
                'price' => 100000,
            ],
            [
                'code' => 'MOVA',
                'name' => 'Batman',
                'stock_dvd' => 2,
                'price' => 9500,
            ],
            [
                'code' => 'MOVS',
                'name' => 'Spiderman',
                'stock_dvd' => 4,
                'price' => 15000,
            ],
            [
                'code' => 'MOVE',
                'name' => 'Superman',
                'stock_dvd' => 1,
                'price' => 50000,
            ],
        ];

        DB::table('movies')->insert($movies);
    }
}
