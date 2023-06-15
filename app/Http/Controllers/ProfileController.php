<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('success', 'Wijzingen zijn opgeslagen');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function rooster(Request $request): View
    {
        return view('profile.settings.rooster', [
            'user' => $request->user(),
        ]);
    }

    public function help(Request $request): View
    {
        return view('profile.settings.help', [
            'user' => $request->user(),
        ]);
    }

    public function updateUserImage (User $user){

        $attributes = request()->validate([
            'user_image' => 'mimes:jpg,png,jpeg|max:5048',
        ]);


        if (isset($attributes['user_image'])){
            $attributes['user_image'] = request()->file('user_image')->store('users');
        }
        
        $user->update($attributes);

    
        return back()->with('success', 'Wijzingen zijn opgeslagen');
    }
}
