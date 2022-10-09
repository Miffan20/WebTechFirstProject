<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyPC</title>
    <link rel="stylesheet" href="{{ asset('styles/primary.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles/custom.css') }}" />
</head>

<body>
    <nav>
        <div class="container">
            <a id="logo" href="{{route('index')}}">
                <h2>MyPC</h2>
                <h3>WebStore</h3>
            </a>
            <div class="cart">
                <span>In cart: </span><span id="cart-count"> 0</span>
            </div>
        </div>
    </nav>
    <main class="main">
        <div class="pc">
            <h2>The GigaChad 20000</h2>
            <img id="pcPictures" src="{{asset("/img/pc1.png")}}" alt="GigaChad">
            <p>"The gigaChad is the perfect machine for your gaming needs!" </p>
            <ul>
                <li>
                    1000 GW processor
                </li>
                <li>
                    4000 GB ram Power
                </li>
                <li>
                    0.1 MHz thinking power
                </li>
            </ul>
            <a class="details-link" href="{{route('gigachad')}}">
                Giga Chad
            </a>
        </div>


        <div class="pc">
            <h2>The PlebBoi</h2>
            <img id="pcPictures" src="{{asset("/img/pc2.png")}}" alt="PlebBoi">
            <p>"The PlebBoi comes in multiple colors, to suit your mushroom trips"</p>
            <ul>
                <li>
                    multiple colors to choose from
                </li>
                <li>
                    mystery OnlyFans giftcard
                </li>
                <li>
                    free shrooms
                </li>
            </ul>
            <a class="details-link" href="{{route('plebboi')}}">
                Pleb Boi
            </a>
        </div>

    </main>
    <section class="container">
    </section>
</body>

</html>
