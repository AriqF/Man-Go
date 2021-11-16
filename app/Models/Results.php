<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    protected $table = "Results";
    protected $primarykey = "id";
    protected $fillable=['id','user_id','quizes_id','total_mark','yes_ans','no_ans','status', 'date'];

    public function Quizes(){
        return $this->belongsTo(Quizes::class);
    }

}
