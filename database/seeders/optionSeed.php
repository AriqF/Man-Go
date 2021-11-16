<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class optionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'questions_id' => '1',
            'option' => 'Ohayou gozaimasu, ojisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '1',
            'option' => 'Ohayou gosaimasu, ojiisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '1',
            'option' => 'Ohayou gozaimasu, ojiisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '1',
            'option' => 'Ohayou gosaimasu, ojisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '2',
            'option' => 'Mosha mosha daijyobu desuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '2',
            'option' => 'Mosha mosha daijyobu dezuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '2',
            'option' => 'Moshi moshi daijyobu desuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '2',
            'option' => 'Moshi moshi daijyoubu desuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '3',
            'option' => 'Kone ha watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '3',
            'option' => 'Kore ha watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '3',
            'option' => 'Kone ha watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '3',
            'option' => 'Kore wa watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '4',
            'option' => 'Anata no tomodachi no nahae ha dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '4',
            'option' => 'Anata no domodachi no nahae wa dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '4',
            'option' => 'Anata no tomodachi no namae wa dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '4',
            'option' => 'Anata no tomodachi no namae ha dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '5',
            'option' => 'Kono misa ha asara desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);   
        DB::table('options')->insert([
            'questions_id' => '5',
            'option' => 'Kono mise ha achira desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);    
        DB::table('options')->insert([
            'questions_id' => '5',
            'option' => 'Kono mise ha asara desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);        
        DB::table('options')->insert([
            'questions_id' => '5',
            'option' => 'Kono mise wa achira desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
    }
}
