<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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
            ['user_id'=>1, 'comments'=>'Mantap Jiwaa', 'rating'=>4, 'status'=>0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['user_id'=>2, 'comments'=>'Lumayan Jiwaa', 'rating'=>2, 'status'=>0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['user_id'=>3, 'comments'=>'Sad Jiwaa', 'rating'=>1, 'status'=>0, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ];

        Rating::insert($ratingRecords);
    }
}
