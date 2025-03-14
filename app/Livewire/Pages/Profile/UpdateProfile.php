<?php

namespace App\Livewire\Pages\Profile;

use App\Events\UserUpdated;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UpdateProfile extends Component
{
    use WithFileUploads;

    public $user;
    public $profile_picture;

    public function mount() {
        $this->user = auth()->user();

        event(new UserUpdated($this->user)); // just trying to see if this works
    }

    public function update()
    {
        $this->validate([
            'profile_picture' => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();

        if ($this->profile_picture) {
            // Delete the old avatar if exists
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            // Store the new avatar in the public disk
            $path = $this->profile_picture->store('avatars', 'public');

            // Update user avatar
            $user->avatar = $path;
            $user->save();
        }

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.pages.profile.update-profile');
    }
}