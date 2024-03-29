<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'project', 'semester', 'mata_kuliah', 'description'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'mata_kuliah', 'code');
    }

    public function students(){
        return $this->belongsToMany(student::class, 'members', 'project_id', 'nim');
    }

    //     private static $projects = [
    //         ['title' => 'Calculator',
    //         'code'=> 'cal', 
    //         'course'=>'Algorithm Programming'], 

    //         ['title'=>'Accounting', 
    //         'code'=>'acc', 
    //         'course'=>'Web Programming'],

    //         ['title'=>'Student Report', 
    //         'code'=>'stu', 
    //         'course'=>'Web Programming'],

    //         ['title'=>'POS Resto', 
    //         'code'=>'pos', 
    //         'course'=>'Algorithm Programming'], 

    //         ['title'=>'Online Store', 
    //         'code'=>'onl', 
    //         'course'=>'Entrepreneurship'], 

    //         ['title'=>'Pet Shop', 
    //         'code'=>'pet', 
    //         'course'=>'Mobile App Development'], 
    // ];

    //     public static function allData(){
    //         return collect (self::$projects);
    //     }

    //     public static function dataCode($code){
    //         $allProjects = static::allData();
    //         return $allProjects->firstWhere('code', $code);

    // foreach ($allProjects as $pro){
    //     if ($pro['code']=== $code){
    //         return $pro;
    //     }
    // }

    // }
}
