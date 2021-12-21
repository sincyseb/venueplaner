<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class admin extends Model
{
    use HasFactory;
    public function selectadmin($table,$email,$password)
    {
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }
}
