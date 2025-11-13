<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/1.0.4/css/bulma.min.css">

        <!-- Fonts -->


        <!-- Styles / Scripts -->
      
    </head>
    <body>
        <div class="container">
            

           

            <livewire:user-table />

        </div>
    </body>
</html>
