<?php

namespace App\Models;
use  Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table ="employees";
    protected $fillable = [
     'name','email','age','designation'
     ];

     public static function getEmployee(){
        $records = DB::table('employees')->select('id','name','email','age','designation')->get()->toArray();
        return $records;
     }
}
