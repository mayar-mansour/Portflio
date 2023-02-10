<?php

namespace App\Http\Controllers;

use App\Http\Resources\PortflioResource;
use App\Models\Profile;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PortflioController extends Controller
{
    public function index()

    {
        $profiles= PortflioResource::collection(Profile::all());
        // dd($profiles[0]->name);
        return Inertia::render('Portflio/index',compact('profiles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills= Skill::all();
        return Inertia::render('Portflio/create',compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // if ($request->hasFile('logo')) {
        //     $logo = $request->file('logo')->store('profiles');
            Profile::create([
                'user_id' => Auth::guard('web')->id(),
                'name' => $request->name,
                // 'logo' => $logo,
                // 'company_name' => $request->company_name,
                // 'job_title' => $request->job_title,
                // 'job_title_desc' => $request->job_title_desc,
                // 'youtube_link' => $request->youtube_link,
                // 'linkedin_link' => $request->linkedin_link,
                // 'udemy_link' => $request->udemy_link,
                // 'about_title' => $request->about_title,
                // 'about_desc' => $request->about_desc,
                // 'services_title' => $request->services_title,
                // 'services_desc' => $request->services_desc,
                // 'contact_country' => $request->contact_country,
                // 'contact_mail' => $request->contact_mail,
                // 'skill_id' => $request->skill_id,
                // 'project_id' => $request->project_id,
            ]);


            return Redirect::route('portflio.index')->with('message', 'Skill created successfully.');
        }
    }
// }
