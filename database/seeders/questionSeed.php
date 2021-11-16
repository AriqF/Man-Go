<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class questionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'quizes_id' => '2',
            'question' => 'おはようございます、おじいさん：_____________',
            'answer' => 'Ohayou gozaimasu, ojiisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '2',
            'question' => 'もしもしだいじょうぶですか：＿＿＿＿＿＿＿＿＿ ',
            'answer' => 'Moshi moshi daijyobu desuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '2',
            'question' => 'これはわたしのかばんです：＿＿＿＿＿＿＿＿＿＿',
            'answer' => 'Kore ha watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '2',
            'question' => 'あなたのともだちのなまえはだれですか？：＿＿＿＿＿＿＿＿＿＿',
            'answer' => 'Anata no tomodachi no namae ha dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '2',
            'question' => 'このみせはあちらです：＿＿＿＿＿＿＿＿',
            'answer' => 'Kono mise ha achira desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
