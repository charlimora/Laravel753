<html>
    <head>
        <title>App Name - @yield('titulo')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a href="/cursos" class="navbar-brand"><img src="/logo/logo.png" width="40" height="40" alt=""></a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Nuestros cursos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/nosotros">Sobre nosotros</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/cursos/create">Crear curso</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        <div class="container">
            <br>
            @yield('contenido')
        </div>
    </body>
</html>
