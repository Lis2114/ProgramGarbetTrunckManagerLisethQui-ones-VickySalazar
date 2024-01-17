<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Path extends Model
{
    use HasFactory;
    protected $fillable = [
        "sector",
        "sector"];

        public function schedules() : HasMany {
            return $this->hasMany(Schedule::class);
        }
}
