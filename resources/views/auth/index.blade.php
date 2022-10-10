@extends('auth.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Event Manager App</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('auth.create') }}"> Create New Event</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Categoria</th>
            <th>Imagen</th>
            <th>Descripcion</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Tipo</th>
            <th>Publico</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($events as $event)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $event->nombre_evento }}</td>
            <td>{{ $event->precio }}</td>
            <td>{{ $event->cantidad }}</td>
            <td>{{ $event->categories_id }}</td>
            <td>{{ $event->imagen }}</td>
            <td>{{ $event->descripcion }}</td>
            <td>{{ $event->lugar }}</td>
            <td>{{ $event->fecha }}</td>
            <td>{{ $event->hora }}</td>
            <td>{{ $event->tipo }}</td>
            <td>{{ $event->publico }}</td>
            <td>
                <form action="{{ route('auth.destroy',$event->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('auth.show',$event->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('auth.edit',$event->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $events->links() !!}
      
@endsection