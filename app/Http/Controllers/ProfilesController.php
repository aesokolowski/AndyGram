<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => ['nullable', 'url'],
            'image' => ['nullable', 'image']
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            $image = Image::make(
                public_path("storage/{$imagePath}")
            )->fit(1000, 1000);
            $image->save();
            $data = array_merge($data, ['image' => $imagePath]);
        }

        auth()->user()->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
