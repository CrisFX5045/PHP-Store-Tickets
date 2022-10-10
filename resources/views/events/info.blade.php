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
     
        
        <form action="{{ url('confirm')}}">
        <div class="info-container">
           

        @if (count($errors) > 0)
    <div class="alert alert-danger">
    	<p>Corrige los siguientes errores:</p>
        <ul>
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
        @endif

                <div class="row" style="padding-top: 5em;">
                    <div class="col-sm">
                        <label class="info-title" for="firstname">Nombre completo</label>
                    </div>
                    <div class="col-sm">
                        <input value="" class="info-input" type="text" name="nombre_completo" id="nombre_completo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label class="info-title" for="phone">Número de teléfono</label>
                    </div>
                    <div class="col-sm">
                        <input class="info-input" type="text" name="numero_telefono" id="numero_telefono">   
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label class="info-title" for="email">Correo</label>
                    </div>
                    <div class="col-sm">
                        <input class="info-input" type="text" name="correo" id="correo"> 
                    </div>

                </div>

                <div style="display: none">
                    
                    <input class="info-input" type="text" value="{{ $cantidadTickets }}" name="cantidad" id="cantidad">
                    <input class="info-input" type="text" value="{{ $precioTotal }}" name="precio_total" id="precio_total">
                    <input class="info-input" type="text" value="{{ $id }}" name="event_id" id="event_id">

                </div>
              
                <div  class="row info-m">

                    <button type="submit" class="card-button" onclick="setError()" >Siguiente</button>
                    
                </div>
          
                </div>
        </form>
          
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
    <script src="{{ URL::asset('js/main.js') }}" type="text/javascript"></script>
</body>
</html>