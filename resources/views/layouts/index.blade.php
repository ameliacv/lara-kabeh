
<!DOCTYPE html>
<html>
<head>
    <title>OH yeah</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('data') }}">View All Data</a></li>
        <li><a href="{{ URL::to('data/create') }}">Create a Data</a>
    </ul>
</nav>
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
    @yield('content')
    <!-- Scripts -->

</div>
  <script src="/js/app.js"></script>
</body>

</html>
