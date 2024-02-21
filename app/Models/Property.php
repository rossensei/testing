<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_no',
        'property_name',
        'description',
        'measurement_unit',
        'unit_value',
        'acquisition_date',
        'received_from',
        'assigned_to',
    ];

    public function receivingPersonnel()
    {
        return $this->belongsTo(Employee::class, 'received_from', 'id');
    }

    public function assignedPersonnel()
    {
        return $this->belongsTo(Employee::class, 'assigned_to', 'id');
    }
}
