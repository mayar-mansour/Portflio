<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PortflioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'company_name'=>$this->company_name,
            'job_title'=>$this->job_title,
            'job_title_desc'=>$this->job_title_desc,
            'youtube_link'=>$this->youtube_link,
            'linkedin_link'=>$this->linkedin_link,
            'udemy_link'=>$this->udemy_link,
            'about_title'=>$this->about_title,
            'about_desc'=>$this->about_desc,
            'skill_id'=>$this->skill_id,
            'project_id'=>$this->project_id,
            'services_title'=>$this->services_title,
            'services_desc'=>$this->services_desc,
            'contact_country'=>$this->contact_country,
            'contact_mail'=>$this->contact_mail,
            'logo'=>asset('/storage/'.$this->logo),
        ];
    }
}
