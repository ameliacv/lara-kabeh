<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>OUhh Yeah</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('data') }}">Data</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('data') }}">View All Data</a></li>
                <li><a href="{{ URL::to('data/create') }}">Create a Data</a>
            </ul>
        </nav>

        <h1>All the Data</h1>

        <!-- will be used to show any messages -->
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Nama Data</td>
                    <td>Detail Data</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $value)
                <tr>
                    <td>{{ $value->nama_data }}</td>
                    <td>{{ $value->detail_data }}</td>

                    <!-- we will also add show, edit, and delete buttons -->
                    <td>

                        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->

                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                        <a class="btn btn-small btn-success" href="{{ URL::to('data/' . $value->id) }}">Show this Data</a>

                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('data/' . $value->id . '/edit') }}">Edit this Data</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
