<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nis', 'nama', 'email', 'nohp', 'jurusan', 'alamat'];
}
