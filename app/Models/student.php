<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = ['nim', 'nama', 'alamat', 'no_telp', 'tgl_lahir', 'jurusan'];

    protected $primaryKey = 'nim'; //menandakan primaryKey sebagai code
    public $incrementing = false; //supaya code tidak berubah jadi integer

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string'; //menandakan data type dari primaryKey sebagai String

    public function projects(){
        return $this->belongsToMany(Project::class, 'members', 'nim', 'project_id');
    }
}
