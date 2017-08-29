<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dangky extends Model
{
    protected $table='dangky_tb';
    protected $fillable= ['id','monhoc','giatien','giangvien','image'];
}
