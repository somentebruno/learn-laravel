<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'data_contratacao',
        'data_demissao'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the address associated with the employee.
     * @return HasOne
     */
    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
