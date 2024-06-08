<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{
    public $timestamps = true;
    protected $table = "illnesses";
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $fillable = [
        "id","name","reason","symptom","treatment","description","image_name","created_at","updated_at"
    ];

}
