// implement your code here
let count = 0;

function incrementValue(){
    count++;
    document.getElementById('cart-count').innerHTML = count;
}

/*
function plebBoiButtonController(){
    var x = document.getElementById("color").value;

    if (x === "yellow") {
        document.getElementById("add-to-cart").enabled = true;
        incrementValue();
    }
    else {
        document.getElementById("add-to-cart").disabled = true;
        alert("choose color")
    }
}*/

const selectElement = document.querySelector('#color');

selectElement.addEventListener('change', (event) => {

    let properSrc = String.raw `/img/plebboi/${event.target.value}.png`;

    document.querySelector('#pc-image').src = properSrc;
});
