<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    protected $table = "ukm";
    protected $primaryKey = "id_ukm";
    protected $fillable = ['id_ukm','nama','visi_misi','detail','email','telepon'];
}
