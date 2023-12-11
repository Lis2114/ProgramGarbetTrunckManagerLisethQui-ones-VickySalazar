<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'hourExit' => $this->hourExit,
            'hourArrival' => $this->hourArrival,
            'date' => $this->date,
            'route' => [
                'id' => $this->route->id,
                'sector' => $this->route->sector,
                'neighborhoods' => $this->route->neighborhoods
            ],
            'truck' => [
                'id' => $this->truck->id,
                'numberRegistration' => $this->truck->numberRegistration,
                'capacity' => $this->truck->capacity
            ],
            'employee' => [
                'id' => $this->employee->id,
                'name' => $this->employee->name,
                'lastName' => $this->employee->lastName,
                'identification' => $this->employee->identification,
                'type' => $this->employee->type
            ],
        ];
    }
}
