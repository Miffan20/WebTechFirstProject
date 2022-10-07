// implement your code here
let count = 0;

function incrementValue(){
    count++;
    document.getElementById('cart-count').innerHTML = count;


}

function plebBoiButtonController(){

    var x = document.getElementById("color").value;

    if (x === "yellow") {
       // document.getElementById("add-to-cart-button").enabled = true;
        incrementValue();
        



    }
    else {
        //document.getElementById("add-to-cart-button").disabled = true;
        alert("choose color")

    }



}

const selectElement = document.querySelector('#color-picker')

function changeImage(element) {
    document.querySelector("#pc-image").src = element.value;
}
