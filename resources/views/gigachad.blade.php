<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyPC/The GigaChad 2000</title>
    <link rel="stylesheet" href="{{ asset('styles/primary.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/custom.css') }}"/>
    <script src="{{ asset('js/add-to-cart.js') }}" defer></script>
</head>

<body>
<nav id="chadNav">
    <div class="container">
        <a id="logo" href="{{route('index')}}" >
            <h2>MyPC</h2>
            <h3>WebStore</h3>
        </a>
        <div class="cart">
            <span>In cart: </span>
            <span id="cart-count">0</span>

        </div>
    </div>
</nav>
<section class="container">
    <main class="details-area">
        <img id="pc-image" src="{{asset("/img/pc1.png")}}" alt="GigaChad">
        <h1 id="chadH1">The GigaChad 2000</h1>
        <p></p>
        <ul>
            <li>

            </li>
        </ul>
        <button class="addToCart" id="add-to-cart-button" onclick="incrementValue()">Add To Cart</button>
    </main>
</section>
</body>

</html>
