<?php

namespace App\Http\Controllers;

use App\Http\Resources\PortflioResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\SkillResource;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $auth=Auth::guard('web')->id();
        $skills = SkillResource::collection(Skill::all()->where('profile_id',$auth));
        $projects = ProjectResource::collection(Project::with('skill')->get()->where('profile_id',$auth));
        $profiles= PortflioResource::collection(Profile::all());
        $profiles= PortflioResource::collection(Profile::all()->where('user_id',$auth));
        $services= ServiceResource::collection(Service::all()->where('profile_id',$auth));
        // $test=$profiles[0]->name;

        // dd(Auth::guard('web')->id());



        return Inertia::render('Welcome', compact('skills', 'projects','profiles','auth','services'));
    }
}
