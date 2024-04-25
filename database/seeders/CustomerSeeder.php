<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $customers = [
            [
                'name' => 'Andi',
                'kode' => 'MOV3',
            ],
            [
                'name' => 'Sinta',
                'kode' => 'MOVS',
            ],
            [
                'name' => 'Iwan',
                'kode' => 'MOV1',
            ],
            [
                'name' => 'Susi',
                'kode' => 'MOVA',
            ],
            [
                'name' => 'Sinta',
                'kode' => 'MOV3',
            ],
            [
                'name' => 'Budi',
                'kode' => 'MOV2',
            ],
        ];

        foreach ($customers as $customer) {
            $movieId = DB::table('movies')->where('code', $customer['kode'])->value('id');
            if ($movieId !== null) {
                DB::table('customers')->insert([
                    'name' => $customer['name'],
                    'movie_id' => $movieId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
