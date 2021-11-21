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
        /*********Hira I*********/
        DB::table('questions')->insert([
            'quizes_id' => '1',
            'question' => 'くるま：＿＿＿＿',
            'answer' => 'Kuruma',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '1',
            'question' => 'とうきょ：＿＿＿＿',
            'answer' => 'Toukyo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '1',
            'question' => 'えんぴつ：＿＿＿＿',
            'answer' => 'Enpitsu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '1',
            'question' => 'とけい：＿＿＿＿＿',
            'answer' => 'Tokei',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '1',
            'question' => 'いっぱい：＿＿＿＿',
            'answer' => 'Ippai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '1',
            'question' => 'えいが：＿＿＿＿＿',
            'answer' => 'Eiga',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '1',
            'question' => 'いったい：＿＿＿＿',
            'answer' => 'Ittai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '1',
            'question' => 'にゃんこ：＿＿＿＿',
            'answer' => 'Nyanko',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '1',
            'question' => 'きょねん：＿＿＿＿',
            'answer' => 'Kyonen',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('questions')->insert([
            'quizes_id' => '1',
            'question' => 'でんわ：＿＿＿＿',
            'answer' => 'Denwa',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        /*********Hira II*********/
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
