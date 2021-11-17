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
            'option' => 'Kurama',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '1',
            'option' => 'Kuriha',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '1',
            'option' => 'Kuruma',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '1',
            'option' => 'Kuroma',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '2',
            'option' => 'Tokyo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '2',
            'option' => 'Toukyou',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '2',
            'option' => 'Toukyou',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '2',
            'option' => 'Toukyo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '3',
            'option' => 'Enhitsu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '3',
            'option' => 'Enpidzu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '3',
            'option' => 'Enpitsu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '3',
            'option' => 'Enbitsu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '4',
            'option' => 'Tokei',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '4',
            'option' => 'Tokei',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '4',
            'option' => 'Tokee',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '4',
            'option' => 'Tokie',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '5',
            'option' => 'Ipai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '5',
            'option' => 'Itsubai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '5',
            'option' => 'Itsupai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '5',
            'option' => 'Ippai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        

        /****************Hira II***************/
        DB::table('options')->insert([
            'questions_id' => '6',
            'option' => 'Ohayou gozaimasu, ojisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '6',
            'option' => 'Ohayou gosaimasu, ojiisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '6',
            'option' => 'Ohayou gozaimasu, ojiisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '6',
            'option' => 'Ohayou gosaimasu, ojisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '7',
            'option' => 'Mosha mosha daijyobu desuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '7',
            'option' => 'Mosha mosha daijyobu dezuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '7',
            'option' => 'Moshi moshi daijyobu desuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '7',
            'option' => 'Moshi moshi daijyoubu desuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '8',
            'option' => 'Kone ha watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '8',
            'option' => 'Kore ha watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '8',
            'option' => 'Kone ha watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '8',
            'option' => 'Kore wa watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '9',
            'option' => 'Anata no tomodachi no nahae ha dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '9',
            'option' => 'Anata no domodachi no nahae wa dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '9',
            'option' => 'Anata no tomodachi no namae wa dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '9',
            'option' => 'Anata no tomodachi no namae ha dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '10',
            'option' => 'Kono misa ha asara desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);   
        DB::table('options')->insert([
            'questions_id' => '10',
            'option' => 'Kono mise ha achira desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);    
        DB::table('options')->insert([
            'questions_id' => '10',
            'option' => 'Kono mise ha asara desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);        
        DB::table('options')->insert([
            'questions_id' => '10',
            'option' => 'Kono mise wa achira desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
    }
}
