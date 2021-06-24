<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //
    protected $table = 'students';
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];

    use SoftDeletes;
}
