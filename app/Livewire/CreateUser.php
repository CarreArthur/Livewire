<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateUser extends Component
{
    public $active = false;

    public $name;

    #[Validate('required|email')]
    public $email;

    #[Validate('min:2')]
    public $compagny;

    public $job;
    public $phone;

    public function save()
    {
        $this->validate();

        User::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'compagny'  => $this->compagny,
            'job'       => $this->job,
            'phone'     => $this->phone,
            'password'  => bcrypt('password'),
        ]);

        $this->dispatch("user-created");
        $this->reset(['name', 'email', 'compagny', 'job', 'phone']);
        $this->active = false;
    }

    public function changer()
    {
        $this->active = !$this->active;
    }

    #[On('show-edit-user')]
    public function editUser(User $user)
    {
        $this->active   = true;
        $this->name     = $user->name;
        $this->email    = $user->email;
        $this->compagny = $user->compagny;
        $this->job      = $user->job;
        $this->phone    = $user->phone;
    }

    #[On('show-create-user-modal')]
    public function showModal()
    {
        $this->reset(['name', 'email', 'compagny', 'job', 'phone']);
        $this->active = true;
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
