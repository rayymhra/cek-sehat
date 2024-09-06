<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symtomps extends Model
{
    protected $fillable = [
        'nama',
        'description',
    ];

    public function diases()
    {
        return $this->hasOne(Diases::class);
    }
}