<!-- index.blade.php -->
@extends('layouts/layout')

@section('titulo')
Gestion de Graduaciones
@endsection

@section('encabezado')
Gestion de Graduaciones
@endsection

@section('librerias')

@endsection

@section('contenido')
<!-- despliega mensajes -->
@include('layouts.partials.messages')
<h3>Graduaciones</h3>
<a href="{{ route('graduaciones.create') }}" class="btn btn-outline-primary mb-3"><i class="bi bi-universal-access me-2"></i>Nueva Graduación</a>

<div class="table-responsive">
<table id="tabla_graduacion" class="table hover table-light table-bordered nowrap border dataTable dtr-inline collapsed" width="100%">
    <thead class="flip-content">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Color</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($graduaciones as $row)
        <tr>
            <td>{{ $row->idGraduacion }}</td>
            <td>{{ $row->nombre }}</td>
            <td>{{ $row->color }}</td>
            <td>{{ $row->tipo }}</td>
            <td>
                <a href="{{ route('graduaciones.edit', ['graduacione' => $row->idGraduacion ]) }}" class="btn btn-outline-info"><i class="bi bi-pencil-square me-2"></i>Editar</a>
                {{-- 
                <a href="{{ route('ver_inscriptos_competencia', ['id' => $row->idCompetencia ]) }}" class="btn btn-outline-info">Ver Competidores inscriptos</a>
                <a href="{{ route('tabla_jueces', ['id' => $row->idCompetencia ]) }}" class="btn btn-outline-info">Ver Jueces inscriptos</a>
                <a href="{{ route('verPresentacion', ['id' => $row->idCompetencia ]) }}" class="btn btn-outline-info">Ir a presentacion.</a> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection