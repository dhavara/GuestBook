<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'lecturer', 'sks', 'description'];
    protected $primaryKey = 'code'; //menandakan primaryKey sebagai code
    public $incrementing = false; //supaya code tidak berubah jadi integer

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string'; //menandakan data type dari primaryKey sebagai String

    // private static $course = [
        // [
        //     'name' => 'Web Development',
        //     'code'=> 'IMT2008', 
        //     'lecturer'=>['Dipl.-Inf. Laura Mahendratta Tjahjono', 'Evan Tanuwijaya, S.Kom., M.Kom.'],
        //     'sks'=>'4',
        //     'description'=>'Learn more advanced about Web Development'
        // ],

        // [
        //     'name' => 'Mobile Application Development',
        //     'code'=> 'IMT2009', 
        //     'lecturer'=>['Mychael Maoeretz Engel, S.Kom., M.Cs.'],
        //     'sks'=>'4',
        //     'description'=>'An advanced learning for Mobile App Development'
        // ],

        // [
        //     'name' => 'Database',
        //     'code'=> 'IMT2010', 
        //     'lecturer'=>['Dipl.-Inf. Laura Mahendratta Tjahjono'],
        //     'sks'=>'4',
        //     'description'=>'Learn about advanced Database learning'
        // ],

        // [
        //     'name' => 'Discrete Mathematics',
        //     'code'=> 'IMT2011', 
        //     'lecturer'=>['Caecilia Citra Lestari, S.Kom., M.Kom.'],
        //     'sks'=>'3',
        //     'description'=>'Learn about Discrete Mathematics'
        // ],

        // [
        //     'name' => 'Game Design',
        //     'code'=> 'IMT2012', 
        //     'lecturer'=>['Mychael Maoeretz Engel, S.Kom., M.Cs.', 'Januar Tanzil, S.Kom.'],
        //     'sks'=>'3',
        //     'description'=>'Learn about Designing a game'
        // ],

        // [
        //     'name' => 'Becoming Indonesia',
        //     'code'=> 'UNC2011', 
        //     'lecturer'=>['Yogi Ishabib'],
        //     'sks'=>'3',
        //     'description'=>'Learn about Indonesian history'
        // ]
        // ];

        // public static function allData(){
        //     return collect (self::$course);
        // }
    
        // public static function dataCode($code){
        //     $allCourse = static::allData();
        //     return $allCourse->firstWhere('code', $code);
        // }
}
