<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Minuta</title>

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
            <form action="" method="post">
                <div>
                    <label for="id_empleado">ID Empleado que falto:</label>
                    <input type="number" id="id_empleado" name="">
                </div>
                <div>
                    <label for="id_reunion">ID Reunion: </label>
                    <input type="number" id="id_reunion" name="">
                </div>
                <div>
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="">
                </div>
                <div>
                    <label for="id_reunionemp">ID Supervisor:</label>
                    <input type="number" id="id_reunionemp" name="">
                </div>
                <div>
                    <button type="submit">Registrar Inasistencia</button>
                    <input type="button" onclick="window.location.href='http://127.0.0.1:8000';" value="Salir">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>