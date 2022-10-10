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
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
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

        <!-- Info -->
        <section>
            <div class="info-container">
                <div class="row">
                    <div class="col-sm">
                        <img src="{{ asset('storage/imgs/'.$event->imagen) }}" alt="event image" style="width: 100%">
                        <h2>{{ $event->nombre_evento }}</h2>
                        <p class="category-text">{{ $category -> name}}</p>
                        <p class="card-text">{{ $event->lugar }}</p>
                        <p class="card-text" style="margin-bottom: 1.5em;">{{ $event->fecha}} {{ $event->hora}} </p>
                    </div>
                    <div class="col-sm" style="padding-top: 8em;">
                    <h2>Nombre de Comprador: {{ $request->nombre_completo }}</h2>
                    <p>Tikets Comprados: {{ $request->cantidad }}</p>
                        <p class="total-title" style="margin: 2em;">Total: <hr></p>
                        <p class="total-text">
                        $ {{ $request->precio_total }}</p>
                    </div>
                </div>
                <div class="row info-m">
                    <a class="card-button" href="{{ url('') }}">Confirmar</a>
                </div>
            </div>
        </section>
        <!-- Info -->

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