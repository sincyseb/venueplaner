<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class venue extends Model
{
    use HasFactory;
    public function insertvenue($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectvenue($table)
    {
        return DB::table($table)->get();
    }
    public function updatevenue($table,$data,$id)
    {
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function svenue($table,$id)
    {
        return DB::table($table)->where('venuetype',$id)->get();
    }
}
