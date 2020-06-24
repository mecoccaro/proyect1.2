<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pedido</title>

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
            <form method="post" action="{{ action('ClientesController@pedido') }}">
                <div>
                    <label for="id">ID Pedido:</label>
                    <input type="number" id="id" name="id">
                </div>
                <div>
                    <label for="fechaPedido">Fecha Pedido:</label>
                    <input type="date" id="fechaPedido" name="fechapedido">
                </div>
                <div>
                    <label for="fechaEntrega">Fecha Entrega:</label>
                    <input type="date" id="fechaEntrega" name="fechaentrega">
                </div>
                <div>
                    <label for="id_cliente">ID Cliente:</label>
                    <input type="number" id="id_cliente" name="id_cliente">
                </div>
                <div>
                    <button type="submit">Generar Pedido</button>
                </div>
            </form>
        </div>

        <div class="top-left">
            <a href="/">Home</a>
        </div>

        <div class="top-left2">
            <a href="/ventas">Ventas</a>
        </div>

    </div>
</div>
</div>
</body>
</html>