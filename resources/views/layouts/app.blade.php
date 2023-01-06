<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CartShop E-Commerce Website</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">CartShop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orders">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/customers">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">Categories</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-4">
            @yield('content')
        </div>
    </main>

    <footer class="bg-light py-4 mt-4">
        <div class="container">
            &copy; {{ date('Y') }} CartShop E-Commerce Website
        </div>
    </footer>
</body>
</html>
