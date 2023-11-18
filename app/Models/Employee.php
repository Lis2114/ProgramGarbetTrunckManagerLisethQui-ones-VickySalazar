<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "lastName",
        "identification",
        "type"
    ]
    ;

    // Relación 1 a varios (Categoría => Mascotas)
    public function schedules() : HasMany {
        return $this->hasMany(Schedule::class);
    }
}
