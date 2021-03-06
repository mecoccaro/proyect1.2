<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vajilla_Pieza</title>

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
            font-size: 35px;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        input, select, textarea, button{
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;;
        }
    </style>
</head>
<body>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <form method="post" action="{{ action('CatalogoController@llenarVP') }}">
                <div>
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" id="cantidad" name="cantidad">
                </div>
                <div>
                    <label for="id_pieza">ID Pieza:</label>
                    <input type="number" id="id_pieza" name="id_pieza">
                </div>
                <div>
                    <label for="id_vajilla">ID Vajilla:</label>
                    <input type="number" id="id_vajilla" name="id_vajilla">
                </div>
                <div>
                    <button type="submit">Registrar VP</button>
                    <input type="button" onclick="window.location.href='http://127.0.0.1:8000';" value="Salir">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>