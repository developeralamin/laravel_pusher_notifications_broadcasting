<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       </head>
        <body>
        
            <div>
                 <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('limit') }}">Limit</a>
            <a href="{{ url('rateLimit') }}">RateLimit</a>
            <br>
                 <p>Rate limit section</p>

            </div>
            

    </body>
</html>
