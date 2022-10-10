<!DOCTYPE html>
<html>
<head>
    <title>Event Manager App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            
            let image = document.getElementById('image');
            if(image != null){
                image.addEventListener("change", function(){
                    let reader = new FileReader();
                    reader.onload = (e) => { 
                    let preview = document.getElementById('preview');
                    preview.setAttribute("src", e.target.result);
                }
                    reader.readAsDataURL(this.files[0]); 
                });
            }
        });
    </script>

</body>
</html>