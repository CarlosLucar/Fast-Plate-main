let carts = document.querySelectorAll('.add-cart');
console.log(carts);

let products = [
    {
        name: 'Pork Belly with Rice',
        tag: 'porkbelly',
        price: 13.00,
        inCart: 0
    },
    {
        name: 'Bao Bao Rice',
        tag: 'baobaorice',
        price: 10.00,
        inCart: 0
    },
    {
        name: 'Bao Bao Noodles',
        tag: 'baobaonoodles',
        price: 11.00,
        inCart: 0
    },
    {
        name: 'Bam Bam Noodles',
        tag: 'bambamnoodles',
        price: 11.00,
        inCart: 0
    },
    {
        name: 'Seafood Ramen',
        tag: 'seafoodramen',
        price: 15.00,
        inCart: 0
    },
    {
        name: 'Salmon Mango',
        tag: 'salmonmango',
        price: 24.00,
        inCart: 0
    },
    {
        name: 'Kua Gling Over rice and Fried Egg',
        tag: 'kuagling',
        price: 19.00,
        inCart: 0
    },
    {
        name: 'Duck Pineapple Curry',
        tag: 'duckcurry',
        price: 24.00,
        inCart: 0
    },
    {
        name: 'Kao Soy Noodle',
        tag: 'kaosoynoodle',
        price: 16.00,
        inCart: 0
    },
    {
        name: 'Spicy Basil',
        tag: 'spicybasil',
        price: 15.00,
        inCart: 0
    },
    {
        name: 'Chicken Experience',
        tag: 'chickenexperience',
        price: 8.25,
        inCart: 0
    },
    {
        name: 'Shrimp Dumpling',
        tag: 'shrimpdumpling',
        price: 10.75,
        inCart: 0
    },
    {
        name: 'Lo Mein',
        tag: 'lomein',
        price: 5.50,
        inCart: 0
    },
    {
        name: 'Wonton Soup',
        tag: 'wontonsoup',
        price: 6.95,
        inCart: 0
    },
    {
        name: 'Potsticker Combo',
        tag: 'potstickercombo',
        price: 9.95,
        inCart: 0
    },
    {
        name: 'King Dry Pepper Chicken',
        tag: 'pepperchicken',
        price: 19.95,
        inCart: 0
    },
    {
        name: 'Beef in Hot Chili Oil',
        tag: 'chilioil',
        price: 20.95,
        inCart: 0
    },
    {
        name: 'Braise Lions Head Meatball',
        tag: 'lionheadmeatball',
        price: 22.95,
        inCart: 0
    },
    {
        name: 'Braise Beef Noodle Soup',
        tag: 'beefnoodlesoup',
        price: 12.95,
        inCart: 0
    },
    {
        name: 'Beef w. Broccoli',
        tag: 'beefbroccoli',
        price: 17.95,
        inCart: 0
    },
    {
        name: 'Greek Salad',
        tag: 'greeksalad',
        price: 10.67,
        inCart: 0
    },
    {
        name: 'Harissa Avocado Bowl',
        tag: 'harissaavocadobowl',
        price: 13.91,
        inCart: 0
    },
    {
        name: 'Tahini Caesar',
        tag: 'tahinicaesar',
        price: 10.67,
        inCart: 0
    },
    {
        name: 'Lentil Avocado Bowl',
        tag: 'lentilbowl',
        price: 12.92,
        inCart: 0
    },
    {
        name: 'Side Pita',
        tag: 'sidepita',
        price: 1.75,
        inCart: 0
    }


];


function removeItem(tagname) {
    let cartItems = JSON.parse(localStorage.getItem('productsInCart'));
    let totalCost = JSON.parse(localStorage.getItem('totalCost'));
    let cartNumbers = JSON.parse(localStorage.getItem("cartNumbers"));
    if (tagname in cartItems) {
        let quantity = parseFloat(cartItems[tagname]['inCart']);
        let subtractprice = parseFloat(cartItems[tagname]['price']);
        let totalsubtractprice = quantity * subtractprice;

        let newtotalCost = totalCost - totalsubtractprice;
        newtotalCost1 = parseFloat(newtotalCost.toFixed(2));
        
        localStorage.setItem("totalCost", JSON.stringify(newtotalCost1));

        let newCartNumbers = cartNumbers - quantity;
        localStorage.setItem("cartNumbers", JSON.stringify(newCartNumbers));

        delete cartItems[tagname];
        localStorage.setItem("productsInCart",JSON.stringify(cartItems));
        
        location.reload();
    }
}





for (let i = 0; i<carts.length; i++){
    carts[i].addEventListener('click',() => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    });
};


function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){
        document.querySelector('.menu span').textContent = productNumbers
    }
}


function cartNumbers(product){
    let productNumbers = localStorage.getItem('cartNumbers');
    

    productNumbers = parseInt(productNumbers);


    if (productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.menu span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.menu span').textContent = 1;
    }

    setItems(product);
}

function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    console.log("My cartItems are", cartItems);

    if(cartItems != null){
        if(cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else{
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }


    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}


function totalCost(product){
    //console.log("the product price is", product.price);
    let cartCost = localStorage.getItem('totalCost');
    
    console.log("my cart cost is ", cartCost);

    if(cartCost != null){
        cartCost = parseFloat(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    } else{
        localStorage.setItem("totalCost", product.price);
    }

}

function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');

    let cartCost1 = parseFloat(cartCost); 
    
    let cartCost2 = cartCost1.toFixed(2)


    if(cartItems && productContainer ){
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item =>{
            productContainer.innerHTML += `
            <div class="shoppingcart">
                <div class="product">
                    <span>${item.name}</span>
                </div>
                <div class="price">${item.price.toFixed(2)}</div>
                <div class="quantity"><span>${item.inCart}</span></div>
                <div class="total">$${item.inCart * item.price}</div>
                <a class="remove" onclick='removeItem("${item.tag}")'href="#/">Remove</a>
            </div>
            `;
        });

        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">Order Total</h4>
                <h4 class="basketTotal">$${cartCost2}</h4>
            
            </div>
        
        `


    }
}


onLoadCartNumbers();
displayCart();