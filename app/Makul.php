<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model

{
    protected $table        = 'makul';
    protected $fillable     = ['kode_makul', 'nama_makul', 'sks'];
    public $timestamps      = false;
}