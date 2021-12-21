<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class about extends Model
{
    use HasFactory;
    public function insertabout($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectabout($table)
    {
        return DB::table($table)->get();
    }
    public function updates($table,$data)
    {
        return DB::table($table)->update($data);
    }
}
