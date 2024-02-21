<?php

namespace App\Models;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'address',
        'phone',
        'email',
    ];

    public function receivedProperties()
    {
        return $this->hasMany(Property::class, 'received_from', 'id');
    }

    public function assignedProperties()
    {
        return $this->hasMany(Property::class, 'assigned_to', 'id');
    }
}
