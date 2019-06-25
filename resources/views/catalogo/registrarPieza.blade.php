<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pieza</title>

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

        .top-left2 a {
            position: absolute;
            left: 183px;
            top: 5px;
            color: #636b6f;
            padding: 0 25px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 30px;
        }
    </style>
</head>
<body>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <form action="" method="post">
                <div>
                    <label for="id_pieza">ID Pieza:</label>
                    <input type="number" id="id_pieza" name="">
                </div>
                <div>
                    <label for="id_Coleccion">ID Coleccion:</label>
                    <input type="number" id="id_Coleccion" name="">
                </div>
                <div>
                    <label for="id_molde">ID Molde:</label>
                    <input type="number" id="id_molde" name="">
                </div>
                <div>
                    <label for="descripcion">Descripcion: </label>
                    <textarea id="descripcion" name=""></textarea>
                </div>
                <div>
                    <button type="submit">Registrar Pieza</button>
                </div>
            </form>
        </div>

        <div class="top-left">
            <a href="/">Home</a>
        </div>

        <div class="top-left2">
            <a href="/catalogo">Catalogo</a>
        </div>

    </div>
</div>
</div>
</body>
</html>