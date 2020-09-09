<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UploadAvatarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $courses = $user->courses;
        return view('profile', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $id)
    {
        $user = User::find($id);
        $data = [
            'name' => $request->profile_name,
            'email' => $request->profile_email,
            'birth_day' => $request->birth_day,
            'phone' => $request->phone,
            'address' => $request->address,
            'about' => $request->about
        ];
        $user->update($data);
        return redirect()->back()->with('message', __('messages.update_message'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAvatar(UploadAvatarRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $avatar = null;
        if ($request->hasFile('avatar')) {
            $avatar = $id . "_" . $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->storeAs(config('variable.storage'), $avatar);
            Storage::delete(config('variable.storage') . $user->avatar);
        }
        $user->avatar = $avatar;
        $user->update();
        return redirect()->back()->with('message', __('messages.update_message'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
