<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\UserImage;
use Livewire\Component;

class UserForm extends Component
{
    public $name;
    public $city;
    public $image;
    public function render()
    {
        return view('livewire.user-form');
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|min:10',
            'city' => 'required|min:10',
            'image' => 'required|min:10',
        ]);

        $user = User::create($validated);

        $image = UserImage::create([
            'image' => $validated['image'],
            'user_id' => $user->id
        ]);

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->name = null;
        $this->city = null;
        $this->image = null;
     }
}
