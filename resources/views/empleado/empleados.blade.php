<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Empleados</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-left a {
            position: absolute;
            left: 5px;
            top: 5px;
            color: #636b6f;
            padding: 0 25px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 30px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links  a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        li{
            color: #636b6f;
            padding: 5px 50px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            list-style-type:none;
        }
    </style>
</head>
<body>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Control de Empleados
        </div>

        <div class="top-left">
            <a href="/">Home</a>
        </div>

        <div class="links">
            <ul><li><a href="expediente">Crear Expediente</a></li>
                <li><a href="minuta">Registrar Minuta</a></li>
                <li><a href="turnoHornero">Crear turnos para horneros</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>