<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diases extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'description',
        'treatment'
    ];

    public function symtomps()
    {
        return $this->belongsToMany(Symtomps::class, 'diases_symtomps');
    }
}
