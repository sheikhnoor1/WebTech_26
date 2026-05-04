const unitPrice = 1000;
const quantityInput = document.getElementById("quantity");
const totalPriceField = document.getElementById("totalPrice");

quantityInput.addEventListener("input", function(){

    let quantity = parseInt(quantityInput.value);

    if(quantity < 0){
        alert("Quantity cannot be negative!");
        quantityInput.value = 0;
        quantity = 0;
    }

    let total = unitPrice * quantity * 30;

    totalPriceField.value = total;

    if(total > 1000){
        alert("Congratulations! You are eligible for a gift coupon.");
    }

});