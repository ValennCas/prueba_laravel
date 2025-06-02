<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model{
    use HasFactory;

    protected $table = "usuarios";

    protected $fillable = [
        'user_name',
        'user_pass',
        'user_tipo',
    ];

    
    protected $hidden = [
        'user_pass',
    ];

    public function getAuthPassword(){
        return $this->user_pass;
    }

    public $timestamps= false;
}