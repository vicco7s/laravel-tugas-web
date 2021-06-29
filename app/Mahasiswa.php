<?php

namespace App;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{   
    public $timestamps = false;
    protected $guarded = array();

    protected $table ='mahasiswa';
    protected $filetable = ['user_id','npm','tgl_lahir','tempat_lahir','alamat','telepon','gender'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
