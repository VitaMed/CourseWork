if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('removeCart')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }
    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }
    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
    var itemInputs = document.getElementsByClassName('item-quantity-input')
    for (var i = 0; i < itemInputs.length; i++) {
        var input = itemInputs[i]
        input.addEventListener('change', quantityChanged)
    }
    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}
$('#purchase').click(function() {
    $("#orderModal").modal('show');
});
function purchaseClicked() {
    let yourOrder = "Your order: "
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItems.getElementsByClassName('cartCard')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var titleElement = cartRow.getElementsByClassName('cart-title')[0].innerText
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        yourOrder = yourOrder + titleElement + " - " + quantity + ", "
        total = total + (price * quantity)
    }
    yourOrder += "TOTAL: $" + total;
    var name = document.getElementById("nameUser").value;
    var email = document.getElementById("emailUser").value;
    var address = document.getElementById("addressUser").value;

    if (name === "" || email === "" || address === "") {
        alert("Input your data!")
        $("#orderModal").modal('show');
    } else {
        let message = yourOrder + ".<br>It will be delivered soon by address " + address + ".<br>Have a good day!";
        while (cartItems.hasChildNodes()) {
            cartItems.removeChild(cartItems.firstChild)
        }
        $("#orderModal").modal('hide');
        sendEmail(message, name, email);
        alert('Thank you for your purchase! Check your e-mail :)')
        updateCartTotal()
        emptyCard();
    }
}

function addToCartClicked(event) {
    var empty = document.getElementById('emptyCard');
    empty.style.display = "none";
    var topay1 = document.getElementById('toPay1');
    var topay2 = document.getElementById('toPay2');
    topay1.style.display = "inline-block";
    topay2.style.display = "inline-block";
    var button = event.target
    var shopItem = button.parentElement.parentElement.parentElement
    var title = shopItem.getElementsByClassName('card-title')[0].innerText
    var description = shopItem.getElementsByClassName('card-text')[0].innerText
    var price = shopItem.getElementsByClassName('card-price')[0].innerText
    var weight = shopItem.getElementsByClassName('card-weight')[0].innerText
    var times = shopItem.getElementsByClassName('item-quantity-input')[0].value
    var imageSrc = shopItem.getElementsByClassName('card-image')[0].src
    addItemToCart(title, description, price, weight, imageSrc, times)
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0 || input.value>=15) {
        input.value = 1
    }
    updateCartTotal()
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cartCard')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
    if(total===0){
        emptyCard();
    }
}
function emptyCard(){
    empty = document.getElementById('emptyCard');
    empty.style.display = "inline-block";
    var topay1 = document.getElementById('toPay1');
    var topay2 = document.getElementById('toPay2');
    topay1.style.display = "none";
    topay2.style.display = "none";
}

function addItemToCart(title, description, price, weight, imageSrc, times) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('mb-3')
    cartRow.classList.add('tm-content-box')
    cartRow.classList.add('cartCard')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-title')
    var flag = false;
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            flag = true
            return
        }
    }
    if(!flag){
        alert(`${title} added to Cart`);
    }
    var cartRowContents =`<div class="px-3  py-4 row align-items-center">
                        <div class="col-sm-8 col-12 row">
                            <div class="col-sm-5 col-12 why-image">
                                <img src="${imageSrc}">
                            </div>
                            <div class="col-sm-7 col-12">
                                <div class="mb-1">
                                    <div>
                                        <div class="nameOrder cart-title"><h4>${title}</h4></div>
                                        <div class="descriptOrder mb-2">
                                            <p>${description}</p>
                                        </div>
                                        <span  data-product-weight="575" itemprop="weight">${weight}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-12 row">
                            <input class="cart-quantity-input" style="width: 40px" type="number" value="${times}">
                        </div>
                        <div class="col-sm-2 row col-12 ml-3">
                            <div class="row">
                                <div class="cart-price" style="font-size: 24px">${price}</div>
                            </div>
                        </div>
                        <button class="btn btn-danger removeCart text-white" type = "button">X</button>
                    </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function sendEmail(message, name, email){
    Email.send({
        Host : "mail.adm.tools",
        Username : "fooditafun@foodita.fun",
        Password : "Foodita1234",
        Port: 2525,
        To : `${email}, v380983124128@ukr.net`,
        From : "fooditafun@foodita.fun",
        Subject : "Foodita",
        Body : "Hello, "+name+"!<br>"+ message
    });
}
