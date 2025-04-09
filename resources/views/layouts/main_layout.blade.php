<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('page_title')</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>texto top no layout</h1>

        @yield('content')

        <h1>texto bottom no layout</h1>
    </body>
</html>
