<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibroYCosita extends Model
{
    protected $table = 'libros_y_cositas';

    protected $fillable = [
        'titulo',
        'descripcion',
    ];
}
