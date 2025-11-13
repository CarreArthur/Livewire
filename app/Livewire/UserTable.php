<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    public $search = '';

    public $sortField = 'email';
    public $sortDirection = 'asc';

    protected $listeners = [
        'user-created' => '$refresh',
    ];

    public function clear()
    {
        $this->search = '';
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField    = $field;
            $this->sortDirection = 'asc';
        }

        $this->resetPage();
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $this->dispatch('user-deleted');

        $this->resetPage();
    }

    public function render()
    {
        $users = User::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.user-table', [
            'users' => $users,
        ]);
    }
}
