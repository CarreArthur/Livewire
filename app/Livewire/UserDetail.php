<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserDetail extends Component
{
    public User $user;
    public string $avatarUrl;

    public function mount(User $user)
    {
        // Grâce au typehint User, Laravel fait le route model binding automatiquement

        $this->user = $user;

        // On récupère le prénom (premier mot du champ "name")
        $firstName = trim(explode(' ', $user->name)[0] ?? $user->name);

        // URL de l’avatar DiceBear
        $this->avatarUrl = 'https://api.dicebear.com/9.x/pixel-art/svg?seed=' . urlencode($firstName);
    }

    public function render()
    {
        return view('livewire.user-detail');
    }
}
