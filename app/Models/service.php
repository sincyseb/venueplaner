<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class service extends Model
{
    use HasFactory;
    public function insertservice($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectservice($table)
    {
        return DB::table($table)->get();
    }
    public function updateservice($table,$data,$id)
    {
        return DB::table($table)->where('id',$id)->update($data);
    }
//     public function abc(){
//         return $this->ab('App\Models\event');
//     }
}
