<div>
  

    <div class="modal {{$active ? "is-active" : ""}}">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Saisir les informations</p>
            <button  wire:click="$toggle('active')"  class="delete" aria-label="close" ></button>
          </header>
            <form wire:submit="save">
          <section class="modal-card-body">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" type="text" placeholder="Name" wire:model="name" required>
              </div>
              @error('name') <p class="help is-danger">{{ $message }}</p> @enderror
            </div>

            <div class="field">
              <label class="label">Email</label>
              <div class="control">
                <input class="input" type="email" placeholder="Email" wire:model="email" required>
              </div>
              @error('email') <p class="help is-danger">{{ $message }}</p> @enderror
            </div>

            <div class="field">
              <label class="label">Compagny</label>
              <div class="control">
                <input class="input" type="text" placeholder="Compagny" wire:model="compagny">
              </div>
              @error('compagny') <p class="help is-danger">{{ $message }}</p> @enderror
            </div>

            <div class="field">
              <label class="label">Job</label>
              <div class="control">
                <input class="input" type="text" placeholder="Job" wire:model="job">
              </div>
              @error('job') <p class="help is-danger">{{ $message }}</p> @enderror
            </div>

            <div class="field">
              <label class="label">Phone</label>
              <div class="control">
                <input class="input" type="text" placeholder="Phone" wire:model="phone">
              </div>
              @error('phone') <p class="help is-danger">{{ $message }}</p> @enderror
            </div>
          </section>
          <footer class="modal-card-foot">
            <div class="buttons">
              <button type="submit" class="button is-success">Créer</button>
              <button class="button" wire:click="$toggle('active')">Cancel</button>
            </div>
          </footer>
            </form>
        </div>
      </div>
</div>
