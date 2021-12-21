<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class event extends Model
{
    use HasFactory;
    public function insertevent($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectevent($table)
    {
        return DB::table($table)->get();
    }
    public function updateevent($table,$data,$id)
    {
        return DB::table($table)->where('id',$id)->update($data);
    }
    // public function abcd(){
    //     return $this->abc('App\Models\service');
    // }
}
