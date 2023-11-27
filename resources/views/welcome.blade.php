<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <link rel="stylesheet" href="{{asset('css/comunidad.css')}}">
    <link rel="stylesheet" href="{{asset('css/scroll.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="sidebar">
        <div class="logo">
            <img src="{{asset('img/logo.png')}}" alt="Logo de la web">
        </div>
        <div class="user-profile">
            <img src="{{asset('img/perfil2.png')}}" alt="Foto de perfil">
            <p class="user-name">usuario</p>
            <a href="/logout" class="logout-button"><i class="fas fa-sign-out-alt"></i> <p> Cerrar sesión</p></a>
        </div>
        <a href="/home" class="home-button">

            <i class="fas fa-home fa-2x invisible-icon"></i>
            <span>Home</span>
        </a>
        <div class="sections">
            <ul>
                <a href="/comunidad" class="section-button">
                    <i class="fas fa-users fa-2x invisible-icon"></i>
                    <span>Comunidades</span>
                </a>
                <a href="/rankings" class="section-button">
                    <i class="fas fa-chart-line fa-2x invisible-icon"></i>
                    <span>Ranking</span>
                </a>
            </ul>
        </div>
    </div>
    <div class="contenido">
        @if ($comunidad != null)
            <div class="topbar">
                <span id="nombreComunidad">{{$comunidad->nombre}}</span>
                <div class="boton-miembros">
                    <form action = "/comunidad/{{$comunidad->id}}/miembros" method = "get">
                        <button type="submit" id="verMiembros">
                            <i class="fas fa-users fa-2x invisible-icon"></i> <span>Miembros</span>
                        </button>
                    </form>
                </div>
            </div>
            @if (count($incidentes) > 0)
                <div class="scroll-box">
                    <!-- Lista de incidentes dentro de esta comunidad -->
                    <!-- Puedes obtener el nombre de la comunidad de alguna manera y luego usar JavaScript para cambiarlo -->
                    @foreach ($incidentes as $incidente)
                        <div class="incident-box">
                            <h3>Incidente</h3>
                            <p><strong>Fecha de Apertura:</strong> {{$incidente->fechaAperturaFormateada}}</p>
                            <p><strong>Servicio:</strong> {{$incidente->servicio->nombre}}</p>
                            <p><strong>Entidad:</strong> {{$incidente->entidad->nombre}}</p>
                            <p><strong>Establecimiento:</strong> {{$incidente->establecimiento->nombre}}</p>
                            <p><strong>Estado:<span class="{{$incidente->estadoIncidente}}"></strong> {{$incidente->estadoIncidente}}</span></p>
                            <p><strong>Descripción:</strong> {{$incidente->descripcion}}</p>
                            @if ($incidente->fechaHoraCierre != null)
                                <p><strong>Fecha de Cierre:</strong> {{$incidente->fechaCierreFormateada}}</p>
                            @else
                                <form action = "/comunidad/{{$comunidad->id}}/incidente/{{$incidente->id}}" method = "post">
                                    <button type="submit" id="marcarResuelto">
                                        <i class="fas fa-check"></i> Marcar como Resuelto
                                    </button>
                                </form>
                                <p></p>

                            @endif


                        </div>
                        @endforeach
                </div>
            @else
                <div class="message">
                    <h1>La comunidad no tiene Incidentes</h1>
                    <p>Lo sentimos, los incidentes que estás buscando no existen</p>
                </div>

            @endif
        @else
            <div class="message">
                <h1>Comunidad no encontrada</h1>
                <p>Lo sentimos, la comunidad que estás buscando no se encuentra</p>
            </div>
        @endif
    </div>
</div>
</body>
</html>
