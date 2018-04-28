<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banner";
    protected $primaryKey = "id_banner";
    protected $fillable = ["id_ukm", "file"];
}
