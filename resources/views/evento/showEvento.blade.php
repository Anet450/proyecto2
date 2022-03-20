<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
    <title>Black Moon Detalles</title>
</head>
<body>
    <div class = "titulo">
    <h1>
    <img src="https://i.pinimg.com/originals/f9/e4/aa/f9e4aabe769a9d5b635408a9a5b1fb1b.jpg" class="a">    
    __BLACK MOON____EVENT__
    <img src="https://i.pinimg.com/originals/f9/e4/aa/f9e4aabe769a9d5b635408a9a5b1fb1b.jpg" class="r">    
    </h1>
    </div>
    <div class = "linea"></div>
    @if (Route::has('login'))
                <div class="menu" >
                    <a href="evento/create" class="d">CREATE NEW EVENT</a>
                    <br>
                    @auth
                        <a href="{{ url('evento') }}" class="d">HOME</a>
                        <br>
    @else
                        <a href="{{ route('login') }}" class="d">LOG IN</a>
                        <br>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="d">REGISTER</a>
                        @endif
                    @endauth
    @endif
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <br>
        <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        this.closest('form').submit();">
            <p class="d">RETURN MAIN</p>
        </a>
    </form>
    </div>
    <div class="table">
        <p>EVENTS DETAILS</p>
        <div class="b"></div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Lugar</th>
            <th>Grupo</th>
            <th>Descripcion</th>
        </tr>
            <tr>
                <td>{{$evento->id}}</td>
                <td>{{$evento->nombre}}</td>
                <td>{{$evento->lugar}}</td>
                <td>{{$evento->grupo}}</td>
                <td>{{$evento->descripcion}}</td>
            </tr>
    </table>

    <footer>
    <div class="a22"></div>
    </footer>
</body>
</html>
