<html>
    <head>
        <title>@yield('title')</title>
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        @yield('css')
    </head>
<body>
@if ($paginator->lastPage() > 1)
<ul class="pagination">
 <!--
    <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url(1) }}"><i class="material-icons">chevron_left</i></a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : 'waves-effect' }}">
            <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
-->
    <li style="{{ ($paginator->currentPage() == $paginator->lastPage()) ? 'display:none' : '' }}">
        <a href="{{ $paginator->url($paginator->currentPage()+1) }}">
            <button type="submit" class=" btn " id="{{ $paginator->currentPage() }}">more</button>
        </a>
    </li>
</ul>
@endif
</body>
</html>