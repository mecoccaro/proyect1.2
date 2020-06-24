<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrar Bono</title>

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
            left: 190px;
            top: 5px;
            color: #636b6f;
            padding: 0 25px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 30px;
        }
        .top-left3 a {
            position: absolute;
            left: 422px;
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
            <form method="post" action="{{ action('EmpleadosController@CrearExpediente') }}">
                <div>
                    <label for="id_expediente">Numero de Expediente</label>
                    <input type="number" id="id_expediente" name="id">
                </div>
                <div>
                    <label for="id_empleado">ID Empleado</label>
                    <input type="number" id="id_empleado" name="id_empleado">
                </div>
                <div>
                    <label for="fechaInic">Fecha de Inicio: </label>
                    <input type="date" id="fechaInic" name="fechainicio">
                </div>
                <div>
                    <label for="motivo">Motivo:</label>
                    <select name="motivo">
                        <option value="Bono mes">Bono Mes</option>
                        <option value="Bono anual">Bono anual</option>
                    </select>
                </div>
                <div>
                    <label for="monto">Monto:</label>
                    <input type="number" id="monto" name="monto">
                </div>

                <div>
                    <label for="Observaciones">Observaciones</label>
                    <textarea id="Observaciones" name="observaciones"></textarea>
                </div>
                <div>
                    <button type="submit">Registrar expediente</button>
                </div>
            </form>
        </div>

        <div class="top-left">
            <a href="/">Home</a>
        </div>

        <div class="top-left2">
            <a href="/empleados">Empleado</a>
        </div>

        <div class="top-left3">
            <a href="/expediente">Expediente</a>
        </div>

    </div>
</div>
</div>
</body>
</html>