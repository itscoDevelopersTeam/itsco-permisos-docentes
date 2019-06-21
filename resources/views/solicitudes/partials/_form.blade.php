{{-- asunto --}}
<div class="form-group">
    <label for="name-solicitud">Asunto</label>
    <input type="text" class="form-control" id="asunto-solicitud" name="asunto" value="{!! isset($solicitudPermiso) ? $solicitudPermiso->asunto : ''; !!}">
</div>

{{-- descripción --}}
<div class="form-group">
    <label for="descripcion-solicitud">Descripción</label>
    <textarea class="form-control" id="descripcion-solicitud" name="descripcion" rows="3">{!! isset($solicitudPermiso) ? $solicitudPermiso->descripcion : ''; !!}</textarea>
</div>

<div class="form-row">
    {{-- fecha --}}
    <div class="form-group col-md-4">
        <label for="solicitud-fecha">Fecha</label>
        <input type="date" class="form-control" id="solicitud-fecha" name="fecha" value="{!! isset($solicitudPermiso) ? $solicitudPermiso->fecha : ''; !!}">
    </div>
    
    {{-- hora_inicio --}}
    <div class="form-group col-md-4">
        <label for="solcitud-hora-inicio">Hora de inicio</label>
        <input type="time" class="form-control" id="solicitud-hora-inicio" name="hora_inicio" value="{!! isset($solicitudPermiso->hora_inicio) ? $solicitudPermiso->hora_inicio : ''; !!}">
    </div>
    
    {{-- cantidad horas --}}
    <div class="form-group col-md-4">
        <label for="solicitud-cantidad-horas">Cantidad de horas</label>
        <input type="number" class="form-control" id="olicitud-cantidad-horas" name="cantidad_horas" value="{!! isset($solicitudPermiso) ? $solicitudPermiso->cantidad_horas : ''; !!}">
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary mb-2">Guardar</button>
</div>