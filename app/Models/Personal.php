<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal';
    protected $fillable = ['dni','nombre','apellido','fecha_nacimiento','foto','turno_id','adicionales_id'];

    protected function nombre(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
            set: fn (string $value) => strtoupper($value),
        );
    }

    protected function apellido(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
            set: fn (string $value) => strtoupper($value),

        );
    }

    public function getNombreCompletoAttribute(): string
    {
        return $this->nombre . ' ' . $this->apellido;
    }

    public function getEdadAttribute(): int
    {
        return date('Y') - date('Y', strtotime($this->fecha_nacimiento));
    }
    /**
     * Get the turno that owns the Personal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function turno()
    {
        return $this->belongsTo(Turno::class);
    }

    /**
     * Get the adicional that owns the Personal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function adicional()
    {
        return $this->belongsTo(Adicional::class, 'adicionales_id');
    }
}
