<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Skill extends Model
{
protected $fillable = ['name', 'image'];
public function save(array $options = array())
    {
        if(Auth::guard('web')->check()){
        if( ! $this->profile_id)
        {
            $this->profile_id = Auth::guard('web')->id();
        }

        parent::save($options);
    }}

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function portflio()
    {
        return $this->hasMany(Portflio::class);
    }
}
