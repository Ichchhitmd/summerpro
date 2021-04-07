<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Laravel</title>

    <link href="/css/main.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/welcome"><img src="/img/foodhublogoforedit.png" alt="foodhub logo" width="165"
                height="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/welcome">Home <span class="sr-only"></span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown">

                        <div class="dropdown-content">
                            <a href="/pizza">Pizzas</a>
                            <a href="/momo">Mo:Mo</a>
                            <a href="/sandwich">Sandwiches</a>
                        </div>
                    </div>
                </li>
                <form action="/search" method="GET" class="form-inline my-2 my-md-0 mr-auto" style="margin-left:75px;">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"
                        style="width:200px"  name="search">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i
                            class="fa fa-search"></i></button>
                </form>
                <ul class="navbar-nav navbar-custom ">
                    <li class="nav-item active">
                        <a class="nav-link navbar-text" href="/checkout">
                            <svg width="1em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                            <span class="badge"
                                style="margin:0px">{{Session::has('cart') ?  Session::get('cart')->totalQty:''}}</span>
                        </a>
                    </li>
                </ul>
        </div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/login">Login</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/register">Register</a>
            </li>

        </ul>

        </div>

    </nav>
    @yield('food')
    <footer>
        Copyright 2021 FoodHub
    </footer>
</body>

</html>