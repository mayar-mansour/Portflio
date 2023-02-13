<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Project extends Model
{
    protected $fillable = ['skill_id', 'name', 'image', 'project_url'];
    public function save(array $options = array())
    {
        if(Auth::guard('web')->check()){
        if( ! $this->profile_id)
        {
            $this->profile_id = Auth::guard('web')->id();
        }

        parent::save($options);
    }}

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}

