<div class="form-group">
    <label for="name-product">Nombre del rol</label>
    <input type="text" class="form-control" id="name-role" name="name" value="{!! isset($role) ? $role->name : ''; !!}">
</div>
<div class="form-group">
    <label for="name-product">URL Amigable</label>
    <input type="text" class="form-control" id="slug-role" name="slug" value="{!! isset($role) ? $role->slug : ''; !!}">
</div>
<div class="form-group">
    <label for="description-product">Descripción del rol</label>
    <input type="text" class="form-control" id="description-product" name="description" value="{!! isset($role) ? $role->description : ''; !!}">
</div>
<hr>
<h3>Permiso especial</h3>
<div class="form-group">
    <div class="custom-control custom-radio">
        <input type="radio" id="all-access-role" name="special" value="all-access" class="custom-control-input" 
        @if (isset($role) && $role->special == 'all-access')
            checked
        @endif>
        <label class="custom-control-label" for="all-access-role">Acceso total</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="no-access-role" name="special" value="no-access" class="custom-control-input"
        @if (isset($role) && $role->special == 'no-access')
            checked
        @endif>

        <label class="custom-control-label" for="no-access-role">Ningún acceso</label>
    </div>
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($permissions as $permission)
        <li>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="{{ $permission->slug }}" id="customCheck{{ $permission->id }}" name="permissions[]"
                @if (isset($role) && $role->permissions->contains($permission->id))
                    checked
                @endif
                >
                <label class="custom-control-label" for="customCheck{{ $permission->id }}">{{ $permission->name }} - {{ $permission->description }}</label>
            </div>
        </li>
        @endforeach
    </ul>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary mb-2">Guardar</button>
</div>