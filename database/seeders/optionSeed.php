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

        DB::table('options')->insert([
            'questions_id' => '6',
            'option' => 'Eiga',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '6',
            'option' => 'Eika',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '6',
            'option' => 'Iega',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '6',
            'option' => 'Ieka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '7',
            'option' => 'Itsudai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '7',
            'option' => 'Itsutai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '7',
            'option' => 'Ittai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '7',
            'option' => 'Itsukai',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        
        DB::table('options')->insert([
            'questions_id' => '8',
            'option' => 'Niyanko',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '8',
            'option' => 'Niyango',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '8',
            'option' => 'Nyango',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '8',
            'option' => 'Nyanko',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '9',
            'option' => 'Kyonen',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '9',
            'option' => 'Kiyonen',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '9',
            'option' => 'Kyoren',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '9',
            'option' => 'Kyouren',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '10',
            'option' => 'Denwa',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '10',
            'option' => 'Denha',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '10',
            'option' => 'Tenwa',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '10',
            'option' => 'Tenha',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        

        /****************Hira II***************/
        DB::table('options')->insert([
            'questions_id' => '11',
            'option' => 'Ohayou gozaimasu, ojisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '11',
            'option' => 'Ohayou gosaimasu, ojiisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '11',
            'option' => 'Ohayou gozaimasu, ojiisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '11',
            'option' => 'Ohayou gosaimasu, ojisan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '12',
            'option' => 'Mosha mosha daijyobu desuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '12',
            'option' => 'Mosha mosha daijyobu dezuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '12',
            'option' => 'Moshi moshi daijyobu desuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '12',
            'option' => 'Moshi moshi daijyoubu desuka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '13',
            'option' => 'Kone ha watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '13',
            'option' => 'Kore ha watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '13',
            'option' => 'Kone ha watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '13',
            'option' => 'Kore wa watashi no kaban desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '14',
            'option' => 'Anata no tomodachi no nahae ha dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '14',
            'option' => 'Anata no domodachi no nahae wa dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '14',
            'option' => 'Anata no tomodachi no namae wa dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '14',
            'option' => 'Anata no tomodachi no namae ha dare desuka?',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '15',
            'option' => 'Kono misa ha asara desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);   
        DB::table('options')->insert([
            'questions_id' => '15',
            'option' => 'Kono mise ha achira desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);    
        DB::table('options')->insert([
            'questions_id' => '15',
            'option' => 'Kono mise ha asara desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);        
        DB::table('options')->insert([
            'questions_id' => '15',
            'option' => 'Kono mise wa achira desu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '16',
            'option' => 'Sarada',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '16',
            'option' => 'Salada',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '16',
            'option' => 'Sarata',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '16',
            'option' => 'Saragu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '17',
            'option' => 'Aisukurīmu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '17',
            'option' => 'Aisukurīma',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '17',
            'option' => 'Aisutarīmu',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '17',
            'option' => 'Aisutarīma',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '18',
            'option' => 'Hanbaga',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '18',
            'option' => 'Hanpaga',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '18',
            'option' => 'Hanbaka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '18',
            'option' => 'Banpaga',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        

        DB::table('options')->insert([
            'questions_id' => '19',
            'option' => 'Furaidopoteto',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '19',
            'option' => 'Furaidobochito',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '19',
            'option' => 'Furaidopochito',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '19',
            'option' => 'Furaidoboteto',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '20',
            'option' => 'Esukarētā',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '20',
            'option' => 'Isukarētā',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '20',
            'option' => 'Esukarēku',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '20',
            'option' => 'Isukarēku',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('options')->insert([
            'questions_id' => '21',
            'option' => 'マクドナルド',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '21',
            'option' => 'ムクドナレド　',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '21',
            'option' => 'マタドナルド',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '21',
            'option' => 'マクトナレド',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '22',
            'option' => 'シャツ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '22',
            'option' => 'ツヤシ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '22',
            'option' => 'シャツウ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '22',
            'option' => 'シヤツ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '23',
            'option' => 'コーヒー',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '23',
            'option' => 'コーピー',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '23',
            'option' => 'ゴーヒー',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '23',
            'option' => 'コービー',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '24',
            'option' => 'ケーキ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '24',
            'option' => 'クーキ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '24',
            'option' => 'ケーギ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '24',
            'option' => 'クーギ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('options')->insert([
            'questions_id' => '25',
            'option' => 'アルコール',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '25',
            'option' => 'アレゴール',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '25',
            'option' => 'イルコール',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('options')->insert([
            'questions_id' => '25',
            'option' => 'アルコル',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
