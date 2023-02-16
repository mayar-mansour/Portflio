<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Portflio extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'logo','company_name','job_title','job_title_desc','youtube_link','course_name','linkedin_link','udemy_link','about_desc','about_title','contact_country','contact_mail','contact_phone'];


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
    public function portflio()
    {
        return $this->belongsTo(Portflio::class);
    }
}
