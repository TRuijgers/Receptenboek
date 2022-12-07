"use strict";

const quantityOption = document.querySelector("#option-container > .quantity-option");
const quantityDisplay = document.querySelector("#quantity-display");
const quantity = document.querySelectorAll("li > .quantity");

var index = 1;
var prevMultiplier = 1;
var multiplier = 1;
var displayValue = Math.round(parseFloat(quantityDisplay.innerText) * 1000) / 1000;

function checkOperation(e){
    if (e.target.id == "plus" && index <= 15){
        index += 0.25;
        multiplier = index / 1;
        displayValue--;
        multiplyQuantity(multiplier);
    } else if (e.target.id == "minus" && (index > 0.25 && displayValue > 1)){
        index -= 0.25;
        multiplier = index;
        displayValue++;
        multiplyQuantity(multiplier);
    }
}
function multiplyQuantity(multiplier){
    for (var i = 0; i < quantity.length; i++){
        quantity[i].innerText = Math.round(((parseFloat(quantity[i].innerText) / prevMultiplier) * multiplier) * 1000) / 1000;
    }
    quantityDisplay.innerText = Math.round(((parseFloat(quantityDisplay.innerText) / prevMultiplier) * multiplier) * 1000) / 1000;
    prevMultiplier = index;
}
quantityOption.addEventListener('click', (event) => {
    checkOperation(event);
});