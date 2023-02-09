<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
protected $fillable = ['name', 'image'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
