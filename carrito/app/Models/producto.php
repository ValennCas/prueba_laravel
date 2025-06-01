<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class producto extends Model
{
    use HasFactory;

    public function insertar($producto)
    {
        $producto->save();
    }

    public static function actualizar($producto, $id)
    {
        producto::where('id', '=', $id)->update($producto);
    }
}
