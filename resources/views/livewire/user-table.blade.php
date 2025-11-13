<div>
    <br>

    <livewire:create-user />

    <button class="button is-primary"
            wire:click="$dispatch('show-create-user-modal')">
        Ajouter
    </button>

    <br><br>

    <div class="columns">
        <input type="text" 
               class="input" 
               wire:model.live.debounce.500ms="search" 
               placeholder="Rechercher..." />

        <div>
            <button wire:click="clear" class="column delete is-medium"></button>
        </div>
    </div>

    <table class="table is-hoverable is-fullwidth">
        <thead>
        <tr>
            <th>ID</th>
            <th wire:click="sortBy('name')">Name</th>
            <th wire:click="sortBy('email')">Email</th>
            <th wire:click="sortBy('compagny')">Company</th>
            <th wire:click="sortBy('job')">Job</th>
            <th wire:click="sortBy('phone')">Phone</th>
            <th>Supprimer</th>
            <th>Éditer</th>
            <th>Détail</th>
        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->compagny }}</td>
                <td>{{ $user->job }}</td>
                <td>{{ $user->phone }}</td>

                <td>
                    <button
                        class="button is-danger is-small"
                        wire:click="delete({{ $user->id }})">
                        Supprimer
                    </button>
                </td>

                <td>
                <button 
                    class="button is-info is-small"
                    wire:click="dispatch('show-edit-user', [{{ $user->id }}])"
                >
                    Editer
                </button>
                </td>
                <td>
                    <a href="{{ route('users.show', $user) }}" class="button is-link is-light is-small">
                        Détail
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links('vendor.pagination.bulma') }}
</div>
