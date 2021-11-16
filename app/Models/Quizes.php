<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizes extends Model
{
    protected $table = "Quizes";
    protected $primarykey = "id";
    protected $fillable=['id','quiz_name','description','quiz_time','status','number_of_question'];

    public function Results(){
        return $this->hasMany(Results::class);
    }

}
