<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyPC/ The PlebBoi</title>
    <link rel="stylesheet" href="{{ asset('styles/primary.css') }}"/>
    <link rel="stylesheet" href="{{ asset('styles/custom.css') }}"/>
    <script src="{{ asset('js/add-to-cart.js') }}" defer></script>
</head>

<body>
<nav id="plebNav">
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
        <img id="pc-image" src="{{asset('/img/pc2.png')}}" alt="Plebboi">
        <h1 id="plebH1">The Plebboi</h1>

        <div id="color-picker">
            <label for="color">Chose a color</label>

            <select id="color" onchange="changeImage(this)">
                <option disabled selected value>Select one...</option>
                <option value="{{asset('/img/plebboi/red.png')}}">Red</option>
                <option value="{{asset('/img/plebboi/green.png')}}">Green</option>
                <option value="{{asset('/img/plebboi/blue.png')}}">Blue</option>
            </select>
        </div>

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
