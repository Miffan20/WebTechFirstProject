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
            <p></p>
            <ul>
                <li>

                </li>
            </ul>
            <a class="details-link" href="{{route('gigachad')}}">
                Giga Chad
            </a>
        </div>


        <div class="pc">
            <h2>The PlebBoi</h2>
            <img id="pcPictures" src="{{asset("/img/pc2.png")}}" alt="PlebBoi">
            <p></p>
            <ul>
                <li>

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
