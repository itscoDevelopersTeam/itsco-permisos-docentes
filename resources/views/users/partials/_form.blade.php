<div class="form-group">
    <label for="name-product">Nombre del usuario</label>
    <input type="text" class="form-control" id="name-product" name="name" value="{{ $user->name }}">
</div>

<div class="form-group">
    <label for="description-product">Correo electrónico</label>
    <input type="text" class="form-control" id="description-product" name="email" value="{{ $user->email }}">
</div>

<div class="form-group">
    <label for="user-options">Área</label>
    <select class="custom-select" id="user-options" name="area_id">
        @if (!empty($user->area_id))
            <option selected value="{{ $user->area_id }}">{{ $user->area->name }}</option>
        @else
            <option selected value="">No asignado</option>
        @endif
        @foreach ($areas as $area)
            <option value="{{ $area->id }}">{{ $area->name }}</option>
        @endforeach
    </select>
</div>

<hr>
<h3>Lista de roles</h3>

<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($roles as $role)
        <li>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="{{ $role->slug }}" id="customCheck{{ $role->id }}" name="roles[]" @if ($user->roles->contains($role->id)) checked=checked @endif>
                <label class="custom-control-label" for="customCheck{{ $role->id }}">{{ $role->name }} - {{ $role->description }}</label>
            </div>
        </li>
        @endforeach
    </ul>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary mb-2">Guardar</button>
</div>