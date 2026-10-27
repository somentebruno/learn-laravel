<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'cadend';

    protected $primaryKey = 'codigo';

    const CREATED_AT = 'data_criacao';
    const UPDATED_AT = 'data_atualizacao';

    /**
     * Get the funcionario associated with the endereco.
     * @return BelongsTo
     */
    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'codigo_fun', 'codigo');
    }
}
