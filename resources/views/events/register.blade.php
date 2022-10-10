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

        <!-- Select -->
        <section class="description-section">
            <div class="row select-bg">
                <div class="col-sm">
                    <div>
                        <p class="select-text">{{ $event-> publico}}</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div>
                    <p>$ <input  id="precio" class="select-text" value="{{ $event->precio}}" disabled></input></p>
                    </div>
                </div>
                <div class="col-sm">
                    <div>
                        <input type="number" min="1" max="{{ $event->cantidad }}" class="form-control" id="cantidad-tickets" oninput="setTotal()" placeholder="0" required >
                    </div>
                </div>
            </div>
        </section>
        <!-- Select -->

        <!-- Total -->
        <section class="total-section">
            <p class="total-title">Total: $ <input disabled type="number" id="precio-total" class="total-text" value="0" > </input></p> 
            <a class="card-button" id="boton-registro" onclick="redirectInfo({{ $event->id }})" style="pointer-events: none">Siguiente </a>
            <br></br>
            <spam  class="total-text" id="formError"></soam>
        </section>
        
        <!-- Total -->

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