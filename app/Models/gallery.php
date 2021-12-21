<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class gallery extends Model
{
    use HasFactory;
    public function insertgallery($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectgallery($table)
    {
        return DB::table($table)->get();
    }
    public function updategallery($table,$data,$id)
    {
        return DB::table($table)->where('id',$id)->update($data);
    }
}
