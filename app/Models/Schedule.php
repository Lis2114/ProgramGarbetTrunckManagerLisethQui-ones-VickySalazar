<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable =
    [
        "hourExit",
        "hourArrival",
        "date",
        "route_id",
        "truck_id",
        "employee_id"

    ];

    // belongTo
    function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    function route(): BelongsTo
    {
        return $this->belongsTo(Path::class);
    }
    function truck(): BelongsTo
    {
        return $this->belongsTo(Truck::class);
    }
}
