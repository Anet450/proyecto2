<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BlackMoon event</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
</head>
<body >
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
                        <form method="POST" action="{{ route('logout') }}">
                         @csrf
    
                          <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <p class="d"> CLOSE </p>
                        </a>
                        </div>
                    </form>
    @else
                        <a href="{{ route('login') }}" class="d">LOG IN</a>
                        <br>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="d">REGISTER</a>
                        @endif
                    @endauth
                </div>
                <div class="margen"></div>
    @endif
    <div class="table">
        <p>PROXIMOS EVENTOS</p>
        <div class="b"></div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Lugar</th>
            <th>Grupo</th>
            <th>Acciones</th>
        </tr>
    
        @foreach ($eventos as $evento)
            <tr>
                <td>{{$evento->id}}</td>
                <td>{{$evento->nombre}}</td>
                <td>{{$evento->lugar}}</td>
                <td>{{$evento->grupo}}</td>
                <td>
                    <a href="evento/{{$evento->id}}">SHOW DETAILS</a>
                    <br>
                    <a href="evento/{{$evento->id}}/edit">EDIT</a>
                    <form action="/evento/{{$evento->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="botton">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
        
    </div>
    <footer>
    <div class="a22"></div>
    </footer>
</body>
</html>
