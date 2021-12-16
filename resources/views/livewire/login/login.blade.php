<div>

    <div class="row">

        <div class="mx-auto col-md-4">
            <img class="mx-auto d-block" style="width: 140px;height:140px;"
                src="{{ Storage::disk('public')->url('images/usuarios/default.png') }}" alt="">
            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label class="form-label">Correo electronico</label>
                    <input wire:model="email" type="email" class="form-control" placeholder="Ejemplo@ejemplo.com">
                    @error('email') <b class="text-danger">{{ $message }}</b> @enderror
                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input wire:model="password" placeholder="********" type="password" class="form-control">
                    @error('password') <b class="text-danger">{{ $message }}</b>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Acceder</button>
            </form>
        </div>

    </div>


</div>
