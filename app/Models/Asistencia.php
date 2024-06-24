<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'personal_id',
        'tipo_asistencia_id',
        'observaciones',
    ];

    /**
     * Get the asistenciaTipo that owns the Asistencia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function asistenciaTipo()
    {
        return $this->belongsTo(AsistenciaTipo::class);
    }
}
