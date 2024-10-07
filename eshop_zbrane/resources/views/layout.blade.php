<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gun Store</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Gun Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/equipment">Equipment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/others">Others</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
