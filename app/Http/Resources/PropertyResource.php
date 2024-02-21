<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
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
            'property_no' => $this->property_no,
            'property_name' => $this->property_name,
            'description' => $this->description,
            'measurement_unit' => $this->measurement_unit,
            'unit_value' => $this->unit_value,
            'acquisition_date' => $this->acquisition_date,
            'received_from' => $this->receivingPersonnel->fname . ' ' . $this->receivingPersonnel->lname,
            'assigned_to' => $this->assignedPersonnel->fname . ' ' . $this->assignedPersonnel->lname,
        ];
    }
}
