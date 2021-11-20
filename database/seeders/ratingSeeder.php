<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rating;

class ratingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ratingRecords = [
            ['id' =>1, 'user_id'=>1, 'comments'=>'Mantap Jiwaa', 'rating'=>4, 'status'=>0],
            ['id' =>2, 'user_id'=>2, 'comments'=>'Lumayan Jiwaa', 'rating'=>2, 'status'=>0],
            ['id' =>3, 'user_id'=>3, 'comments'=>'Sad Jiwaa', 'rating'=>1, 'status'=>0],
        ];

        Rating::insert($ratingRecords);
    }
}
