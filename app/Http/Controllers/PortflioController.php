<?php

namespace App\Http\Controllers;

use App\Http\Resources\PortflioResource;
use App\Http\Resources\ProjectResource;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PortflioController extends Controller
{
    public function index()

    {
        $auth=Auth::guard('web')->id();

        $profiles= PortflioResource::collection(Profile::all()->where('user_id',$auth));
        //dd($profiles);

        return Inertia::render('Portflio/index',compact('profiles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $skills= Skill::all();
        // $projects=Project::all();

        return Inertia::render('Portflio/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('profiles');
            Profile::create([
                'user_id' => Auth::guard('web')->id(),
                'name' => $request->name,
                'logo' => $logo,
                'company_name' => $request->company_name,
                'job_title' => $request->job_title,
                'job_title_desc' => $request->job_title_desc,
                'youtube_link' => $request->youtube_link,
                'linkedin_link' => $request->linkedin_link,
                'udemy_link' => $request->udemy_link,
                'course_name' => $request->course_name,
                'about_title' => $request->about_title,
                'about_desc' => $request->about_desc,
                'contact_country' => $request->contact_country,
                'contact_mail' => $request->contact_mail,
                'contact_phone' => $request->contact_phone,
            ]);

            return Redirect::route('portflio.index')->with('message', 'Skill created successfully.');
        }
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $image = $profile->logo;
        $request->validate([
            'name' => ['required', 'min:3'],
            'logo' => ['required']
        ]);
        if ($request->hasFile('logo')) {
            Storage::delete($profile->image);
            $image = $request->file('logo')->store('profiles');
        }

        $project->update([
            'user_id' => Auth::guard('web')->id(),
                'name' => $request->name,
                'logo' => $logo,
                'company_name' => $request->company_name,
                'job_title' => $request->job_title,
                'job_title_desc' => $request->job_title_desc,
                'youtube_link' => $request->youtube_link,
                'linkedin_link' => $request->linkedin_link,
                'udemy_link' => $request->udemy_link,
                'course_name' => $request->course_name,
                'about_title' => $request->about_title,
                'about_desc' => $request->about_desc,
                'contact_country' => $request->contact_country,
                'contact_mail' => $request->contact_mail,
                'contact_phone' => $request->contact_phone,
                'logo' => $image
        ]);
        return Redirect::route('profiles.index')->with('message', 'Project updated successfully.');
    }
    public function destroy(Profile $profile)
    {
        Storage::delete($profile->logo);
        $profile->delete();
        return Redirect::back()->with('message', 'profile deleted successfully.');
    }
}
