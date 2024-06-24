<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsistenciaTipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    protected function nombre(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
            set: fn (string $value) => strtoupper($value),
        );
    }

    /**
     * Get all of the asistencias for the AsistenciaTipo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistencias(): HasMany
    {
        return $this->hasMany(Asistencia::class);
    }
}
