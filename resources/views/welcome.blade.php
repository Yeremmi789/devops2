<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font: 30px Arial, Helvetica, sans-serif;
            padding: 0;
            margin: 0;
            height: 100vh;

            background-color: #d6cdca;
            text-align: center;
            text-decoration: underline;
        }

        .titulo {
            padding: 20px;
        }

        button {
            height: 38px;
            background-color: #1db9e8;
            border: 15;
            padding-left: 50px;
            padding-right: 50px;
            color: rgb(14, 12, 12);
            text-align: center;
            width: auto;
            margin-top: auto;
        }

        input {
            height: 38px;
            background-color: #cfcceb;
            border: 15;
            color: rgb(14, 12, 12);
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 0px;
            min-height: 20px;
            border-bottom: 8px solid #1293d4;
            text-align: center;
            width: auto;
        }
    </style>
</head>

<body class="antialiased">

    <body>
        <div class="container">
            <p class="titulo">CALCULADORA</p>
            <form class="form">
                <div class="input-container">
                    <input type="number" formControlName="variable1" placeholder="Número 1">

                </div>
                <div class="input-container">
                    <input type="number" formControlName="variable2" placeholder="Número 2">

                </div>
                <div class="button-container">
                    <p><button mat-raised-button color="primary">SUMAR</button></p>
                    <button mat-raised-button color="primary">RESTAR</button>
                    <button mat-raised-button color="primary">MULTIPLICAR</button>
                    <button mat-raised-button color="primary">DIVIDIR</button>
                </div>
            </form>
            <div class="resultado-container">
                <p>Resultado </p>

            </div>
        </div>
    </body>
</body>

</html>