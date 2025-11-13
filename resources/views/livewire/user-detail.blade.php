<div class="section">
    <div class="container">

        <a href="{{ url()->previous() }}" class="button is-light">
            ← Retour
        </a>

        <div class="columns is-centered mt-5">
            <div class="column is-6">
                <div class="card">
                    <div class="card-content has-text-centered">

                        <figure class="image is-128x128 is-inline-block">
                            <img src="{{ $avatarUrl }}" alt="Avatar de {{ $user->name }}">
                        </figure>

                        <h1 class="title is-3 mt-4">{{ $user->name }}</h1>
                        <h2 class="subtitle is-5">
                            {{ $user->job ?? 'Fonction non renseignée' }}
                        </h2>

                        <div class="content has-text-left mt-4">
                            <p><strong>Email :</strong> {{ $user->email }}</p>
                            <p><strong>Entreprise :</strong> {{ $user->compagny ?? 'Non renseignée' }}</p>
                            <p><strong>Téléphone :</strong> {{ $user->phone ?? 'Non renseigné' }}</p>
                            <p><strong>ID :</strong> {{ $user->id }}</p>
                            <p><strong>Créé le :</strong> {{ $user->created_at?->format('d/m/Y H:i') }}</p>
                            <p><strong>Mis à jour le :</strong> {{ $user->updated_at?->format('d/m/Y H:i') }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
