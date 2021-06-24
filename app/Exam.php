<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $primaryKey = 'id_a';
    public $timestamp = true;
    
    protected $table = 'exams';
    protected $fillable = ['judul_54', 'abstrak_54'];
}
