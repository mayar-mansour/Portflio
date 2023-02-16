<?php

namespace App\Http\Controllers;

use App\Http\Resources\PortflioResource;
use App\Http\Resources\ProjectResource;
use App\Models\Portflio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use PhpParser\Node\Expr\AssignOp\Pow;

class PortflioController extends Controller
{
    public function index()

    {
        $auth=Auth::guard('web')->id();

        $profiles= PortflioResource::collection(Portflio::all()->where('user_id',$auth));
        $prof= PortflioResource::collection(Portflio::all()->where('user_id',$auth))->first();
        // dd($prof);

        return Inertia::render('Portflio/index',compact('profiles','prof'));
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
            Portflio::create([
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

            return Redirect::route('portflio.index')->with('message', 'Portflio created successfully.');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($profile);
        $profile = Portflio::where('id',$id)->first();
        //dd($profile);
        return Inertia::render('Portflio/edit',compact('profile'));
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $request->validate([
        //     'name'=>['required','min:3'],
        //     'logo'=>['required'],
        //     'country'=>['required'],
        //     'contact_phone'=>['required'],
        //     'contact_mail'=>['required'],
        // ]);
        $profile = Portflio::where('id',$request->id)->first();

        $image = $profile->logo;
        //  dd($image);
        $request->validate([
            'name' => ['required', 'min:3'],
            'logo' => ['required']
        ]);
        if ($request->hasFile('logo')) {
            Storage::delete($image);
            $image = $request->file('logo')->store('profiles');
        }

        $profile->update([
                'user_id' => Auth::guard('web')->id(),
                'name' => $request->name,
                'logo' => $image,
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

        return Redirect::route('portflio.index')->with('message', 'Project updated successfully.');
    }
 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Portflio::where('id',$id)->first();
        Storage::delete($profile->logo);
        $profile->delete();
        return Redirect::back()->with('message', 'profile deleted successfully.');
    }

}
