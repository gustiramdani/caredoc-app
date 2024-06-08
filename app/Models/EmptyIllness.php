<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmptyIllness extends Model
{
    public $timestamps = true;
    protected $table = "empty_illnesses";
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $fillable = [
        "id","illness","created_at","updated_at"
    ];

}
