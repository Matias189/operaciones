@extends('layouts.plantilla');
@section('contenido')

<h2>Formulario</h2>

<form action="/prueba" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Teléfono</label>
        <input id="phone" name="codigo" type="text" class="form-control" tabindex="1" value="{{old('phone')}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Categoría</label>
        <select class="form-select" name="categoria_id" id="categoria_id">
        <option value="">Seleccione una categoría</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria['id'] }}">{{ $categoria['name']}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Ubicación</label>
        <input id="fixedlocation" name="fixedlocation" type="text" class="form-control" tabindex="3" value="{{old('fixedlocation')}}">
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Ubicación inicial</label>
        <input id="startinglocation" name="startinglocation" type="text" class="form-control" tabindex="4" value="{{old('startinglocation')}}">
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Ubicación final</label>
        <input id="endlocation" name="endlocation" type="text" class="form-control" tabindex="5" value="{{old('endlocation')}}">
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Geolocalización</label>
        <input id="geolocation" name="geolocation" type="text" class="form-control" tabindex="6" value="{{old('geolocation')}}">
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Adjuntar archivo</label>
        <input id="file" name="file" type="text" class="form-control" tabindex="7" value="{{old('file')}}">
        
    </div>

    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Enviar</button> 
</form>
@endsection