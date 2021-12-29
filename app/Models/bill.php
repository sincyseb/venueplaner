<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class bill extends Model
{
    use HasFactory;
    public function insertbill($table,$data)
    {
        DB::table($table)->insert($data);
    }

}
