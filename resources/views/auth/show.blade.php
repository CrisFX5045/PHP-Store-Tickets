@extends('auth.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Event</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('auth.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria:</strong>
                {{ $categories->name }}
            </div>
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $event->nombre_evento }}
            </div>
            <div class="form-group">
                <strong>Precio:</strong>
                {{ $event->precio }}
            </div>
            <div class="form-group">
                <strong>Cantidad:</strong>
                {{ $event->cantidad }}
            </div>
            <div class="form-group">
                <strong>Imagen:</strong>
                <br><img src="{{ asset('storage/imgs/'.$event->imagen) }}" alt="event image" style="width: 20%">
            </div>
            <div class="form-group">
                <strong>Lugar:</strong>
                {{ $event->lugar }}
            </div>
            <div class="form-group">
                <strong>Fecha:</strong>
                {{ $event->fecha }}
            </div>
            <div class="form-group">
                <strong>Hora:</strong>
                {{ $event->hora }}
            </div>
            <div class="form-group">
                <strong>Tipo:</strong>
                {{ $event->tipo }}
            </div>
            <div class="form-group">
                <strong>Publico:</strong>
                {{ $event->publico }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $event->descripcion }}
            </div>
        </div>
    </div>
@endsection