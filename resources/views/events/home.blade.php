<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketCalidad</title>
    <!-- Bootstrap link/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- libreria para el buscador -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Raleway:wght@100;300;500&display=swap" rel="stylesheet">
    <!-- Main stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
</head>
<body>

    <div class="container-fluid">

        <!-- Header -->
        <header>
            <nav class="fixed-top top-bar">
                <div class="row">
                    <div class="col top-logo">
                        <a class="logo" href="{{ url('') }}">TicketCalidad</a>
                    </div>
                    <div class="col top-login">
                        <a class="logo" href="{{ url('login') }}"><i class="far fa-user-circle"></i></a>
                    </div>
                </div>
            </nav>

            <!-- Barra de busqueda -->

            <section class="img-header">
                
                    <fieldset class="search-field">
                        <input class="search-input" type="text" id="buscadorInput" onkeyup="buscadorFunction()" placeholder="Buscar...">  
                        <div id="buscadorList" class="buscador-content">

                            @foreach($events as $event)

                            <a href="{{ route('description.show',$event->id)}}">{{ $event->nombre_evento }}</a> 

                            @endforeach

                        </div>
                    
                    </fieldset>
            </section>

            <!-- Barra de busqueda -->

        </header>
        <!-- Header -->
        
        <!-- Select -->
        <section>
            <div class="row">

            
         
                <div class="col-sm select-section">

                
                    <strong class="card-text">Categoria:</strong>
                    <select id="categories" name="categories_id" class="select-cb"> 
                            <option value="">select category</option>
                        @foreach ($categories->all() as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                </div>
            
            </div>
        </section>
        <!-- Select -->

        <!-- Tickets -->
        <section class="ticket-section">
            <div class="row">
                @foreach($events as $event)
                <div class="col-12 col-sm-4" style="margin-top: 05em">
                
                    <div class="card">
                        
                        <img src="{{ asset('storage/imgs/'.$event->imagen) }}" alt="event image" style="width: 100%">
                        <h2>{{ $event->nombre_evento }}</h2>
                        @foreach ($categories as $category)
                            @if($category->id==$event->categories_id)
                            <p class="category-text">{{ $category->name }}</p>
                            @endif
                        @endforeach
                         <p class="card-text">Tipo: {{ $event->tipo }}</p>
                        <p class="card-text">Lugar: {{ $event->lugar }}</p>
                        <p class="card-text">Fecha: {{ $event->fecha }} {{ $event->hora }}</p>
                        <a class="card-button" href="{{ route('description.show',$event->id)}}">Ticket</a>
                     
                    </div>

                </div>
                @endforeach
            </div>
        </section>
        <!-- Tickets -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <h2 class="footer-title">TicketCalidad</h2>
            </div>
            <div class="row">
                <nav>
                    <ul>
                        <li class="bottom-nav-item"><a aria-label="Facebook" class="footer-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="bottom-nav-item"><a aria-label="Twitter" class="footer-link" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="bottom-nav-item"><a aria-label="Instagram" class="footer-link" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="bottom-nav-item"><a aria-label="Youtube" class="footer-link" href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </nav>
            </div>
        </footer>
        <!-- Footer -->

    </div>

    
    <script src="{{ URL::asset('js/main.js') }}" type="text/javascript"></script>

</body>



</html>