<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class userdetail extends Model
{
    use HasFactory;
    public function insertuser($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectuser($table,$email,$password)
    {
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }
    // public function name($table,$id)
    // {
    //     return DB::table($table)->where()
    // }
}
