<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acessibilidade extends Model
{
    protected $table = 'locais_acessibilidades';

    protected $fillable = [
        'acessibilidade',
        'lat',
        'lng'
    ];

    protected $casts = [
        'acessibilidade' => 'json'
    ];

}