<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Validation\Rule;

/**
 * @mixin IdeHelperProfilesController
 */
class ProfilesController extends Controller
{
    use HasFactory;

    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(50),
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ["string", "required", "max:255", "alpha_dash", Rule::unique('users')->ignore($user)],
            'name' => ["string", "required", "max:255"],
            'email' => ["string", "required", "email", "max:255", Rule::unique('users')->ignore($user) ],
            'password' => ["string", "required", "min:8", "max:255", "confirmed"],
            'avatar' => ["file"],
            'banner' => ["file"],
            'description' => ["max:255"],
        ]);

        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        if (request('banner')) {
            $attributes['banner'] = request('banner')->store('banners');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
