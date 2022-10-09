// implement your code here
let count = 0;

function incrementValue(){
    count++;
    document.getElementById('cart-count').innerHTML = count;
}


function plebBoiButtonController(){



    var x = document.getElementById("color").value;

    if (x === "red" ||x === "blue" || x === "green") {

        incrementValue();
    }
    else {
        document.getElementById("add-to-cart").disabled = true;
        alert("choose color")
    }
}


const selectElement = document.querySelector('#color');

selectElement.addEventListener('change', (event) => {

    let properSrc = location.origin + `/img/plebboi/${event.target.value}.png`;

    document.querySelector('#pc-image').src = properSrc;
});


selectElement.addEventListener('change', (event) => {

    let properSrc = location.origin + `/img/plebboi/${event.target.value}.png`;
    if (event.target.value === "red" || event.target.value === "green" ||event.target.value === "blue" ){
        document.getElementById("add-to-cart").disabled = false;
    }

});

