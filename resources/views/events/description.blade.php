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
                </div>
            </nav>
        </header>
        <!-- Header -->

        <!-- Description -->
        <section class="description-section">
            <div class="row">
           

                <div class="col-sm">
                    <div class="description-bg">
                        <img src="{{ asset('storage/imgs/'.$event->imagen) }}" alt="event image" style="width: 100%">
                        <p class="description-title">Descripción</p>
                        
                        
                        
                        <p class="description-text">{{ $event->descripcion }}</p>

                      
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row">
                        <div class="description-bg">
                    

                        @foreach ($category as $categories)
                        
                        @if($categories->id==$event->categories_id)

                                <p class="description-title">{{ $categories->name}}</p>
                         @endif
                        @endforeach

                            <p class="ticket-title">{{ $event->nombre_evento }}</p>
                            <p class="card-text">{{ $event->fecha }}, {{ $event->hora }}</p>
                            <P class="card-text">{{ $event->lugar }}</P>
                            <a class="card-button" href="{{ url('register',$event->id) }}">Registrar</a>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="description-bg">
                            <p class="description-title">Relacionados</p>
                            <div class="row">
                            @foreach($eventsTems as $eventsTem)

                                    <div class="col-sm">
                                        <div class="card" style="max-width: 150px;">
                                            <img src="{{ asset('storage/imgs/'.$eventsTem->imagen) }}" alt="event image" style="width: 100%">
                                            <h2 style="font-size: 1em;">{{ $eventsTem->nombre_evento }}</h2>
                                            <a class="card-button" href="{{ route('description.show',$eventsTem->id)}}">Ticket</a>
                                        </div>
                                    </div>

                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Description -->

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

</body>
</html>