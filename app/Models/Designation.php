<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

  

    // Example: One designation might have many employees (if you have an Employee model)
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    // Example: One designation might be linked to multiple users (if you have a User model)
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // Example: One designation might be linked to many roles (if you have a Role model)
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    
    // Example: If designations are tied to departments or similar entities
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}