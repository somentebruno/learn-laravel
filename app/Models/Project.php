<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\HasMany;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'orcamento',
        'data_inicio',
        'data_final'
    ];


    /**
     * Um projeto pertence a um cliente
     * @return void
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
