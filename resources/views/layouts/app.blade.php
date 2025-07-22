<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>docm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">شركة الدقة لأنظمة الحماية</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
  <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
</li>
<li class="nav-item">
  <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="/products">Products</a>
</li>

      </ul>
    </div>
  </div>
</nav>





@yield('content')

<footer class="bg-dark text-white py-3 mt-3">
    <p>&copy; 2025</p>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>

