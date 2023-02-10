<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'logo'];


    public function save(array $options = array())
    {
        if(Auth::guard('web')->check()){
        if( ! $this->user_id)
        {
            $this->user_id = Auth::guard('web')->id();
        }

        parent::save($options);
    }
    }
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
