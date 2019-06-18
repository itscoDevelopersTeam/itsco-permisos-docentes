<div class="form-group">
    <label for="name-area">Nombre del area</label>
    <input type="text" class="form-control" name="name" id="name-area" placeholder="Contabilidad" value="{!! isset($area) ? $area->name : ''; !!}">
</div>

<div class="form-group">
    <label for="user-options">Jefe de area</label>
    <select class="custom-select" id="user-options" name="user_id">
        @if (isset($area) && isset($area->user))
            <option selected value="{{ $area->user_id }}">{{ $area->user->name }}</option>
        @else
            <option selected value="">No asignado</option>
        @endif
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary mb-2">Guardar</button>
</div>