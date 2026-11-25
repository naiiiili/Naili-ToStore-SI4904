
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - ToStore</title>

    <link rel="stylesheet" href="{{ asset('css/ekspedisi.css') }}">
</head>
<body>

    <div class="navbar">
        <h2>ToStore</h2>
        <span>Admin Dashboard</span>
    </div>

    <div class="container">
        <aside class="sidebar">
            <h3>Menu</h3>
            <a href="{{ route('ekspedisi.index') }}">Data Ekspedisi</a>
        </aside>

        <main class="content">
            @if (session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>

</body>
</html>
