<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(10),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(User $user)
    {
        //
//        $this->authorize('edit', $user);

        return view('profiles.edit', compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $attributes = $request->validate([
            'name' => ['required', 'string', 'max:255', 'alpha_dash'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user)],
            'avatar' => ['image'],
            'banner' => ['image'],
            'description' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'string', Rule::unique('users')->ignore($user)],
            'password' => ['nullable', 'confirmed', 'string', 'min:8', 'max:255'],
        ]);

        if ($request->avatar) {
            $attributes['avatar'] = $request->avatar->store('avatars');
        }
        if ($request->banner) {
            $attributes['banner'] = $request->banner->store('banners');
        }
        if ($request->description) {
            $attributes['description'] = $request->description;
        }

        $user->update($attributes);
        return redirect($user->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
