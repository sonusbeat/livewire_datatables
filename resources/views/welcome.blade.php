<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


        <style>
            .cursor-pointer {
                cursor: pointer;
            }

            .up-arrow {
                display: inline-block;
                transform: rotate(90deg);
            }

            .down-arrow {
                display: inline-block;
                transform: rotate(-90deg);
            }
        </style>

        @livewireStyles
    </head>
    <body>
        <livewire:posts-component />

        @livewireScripts
    </body>
</html>
