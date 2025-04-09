<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @section('top_bar')
        @parent
        <div>Esta é a barra de topo do layout</div>
    @show

    <h1>Texto topo layout</h1>

    @yield('content')

    <h1>Texto bottom layout</h1>

    <hr>

    @yield('bottom_bar')

</body>

</html>
