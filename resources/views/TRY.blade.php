<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>PURCHASE FOOD</title>
		<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">

        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">

            <h1 class="band-name band-name-large">{{__('lang.as')}}</h1>
        </header>
          <div class="main1" >
                               <div class="main-item"><a class="dropdown-item" href="try/kz"><h4>EN<h4></a></div>
                               <div class="main-item"><a class="dropdown-item" href="/kr"><h4>KR</h4></a></div>
                               <div class="main-item"><a class="dropdown-item" href="/kz"><h4>KZ</h4></a></div>
            </div>

        <section class="container content-section">
            <h2 class="section-header">Breakfast</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Porridge</span>
                    <img class="shop-item-image" src="Images/Healthy-Breakfast-Recipes-Without-Eggs.jpg" style="border-radius:50%; border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Rice&Eggs</span>
                    <img class="shop-item-image" src="Images/2.png" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Baked Bread</span>
                    <img class="shop-item-image" src="Images/3221e3.jpg" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Pancakes</span>
                    <img class="shop-item-image" src="Images/images.jpg" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$11.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				<div class="shop-item">
                    <span class="shop-item-title">Milk Pancakes</span>
                    <img class="shop-item-image" src="Images/20141117-027-3.jpg" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$10.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
					<div class="shop-item">
                    <span class="shop-item-title">Omlet</span>
                    <img class="shop-item-image" src="Images/cw7XFW3I_400x400.jpg" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$20.55</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">LUNCH AND DINNER</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Fish</span>
                    <img class="shop-item-image" src="Images/4.jpg"  style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$17.85</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                  <div class="shop-item">
                    <span class="shop-item-title">Pasta</span>
                    <img class="shop-item-image" src="Images/1474395998-ghk-0216-comfortfoodcover-meatballs.jpg" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$25.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Chicken</span>
                    <img class="shop-item-image" src="Images/buttermilk-fried-chicken-12-square.jpg"  style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Mexican Lunch</span>
                    <img class="shop-item-image" src="Images/mexican-lunch-bowls-3.jpg"  style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Turkey</span>
                    <img class="shop-item-image" src="Images/Marinated-Thanksgiving-Turkey_EXPS_THN17_1316_B06_15_5b.jpg" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$30.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Pilaf</span>
                    <img class="shop-item-image" src="Images/Uzbek-Plov-04-500x500.jpg" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$28.47</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Macarons</span>
                    <img class="shop-item-image" src="Images/unnamed.jpg" style="border-radius:50%;border:3px solid;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$16.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Soup</span>
                    <img class="shop-item-image" src="Images/chicken-noodle-soup-g18-56a8c0ce5f9b58b7d0f4d15f.jpg" style="border-radius:50%;border:3px solid;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$20.05</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Pizza</span>
                    <img class="shop-item-image" src="Images/Homemade-Pizza_EXPS_HCA20_376_E07_09_2b.jpg" style="border-radius:50%;border:3px solid;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.47</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
		  <section class="container content-section">
            <h2 class="section-header">DESSERTS</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Macarons</span>
                    <img class="shop-item-image" src="Images/image.jpg"  style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$5.45</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                  <div class="shop-item">
                    <span class="shop-item-title">Cheesecake</span>
                    <img class="shop-item-image" src="Images/oreo-cream-cheese-and-pudding-desse-6.jpg" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$10.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Pie</span>
                    <img class="shop-item-image" src="Images/5-Ingredient-Desserts.jpg"  style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$5.0</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Pies</span>
                    <img class="shop-item-image" src="Images/origin.jpg"  style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Ice Cream</span>
                    <img class="shop-item-image" src="Images/icecream_393863953_250.jpg" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$30.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">StrawberryCheesecake</span>
                    <img class="shop-item-image" src="Images/5cdf13b3049d5.image.jpg" style="border-radius:50%;border:3px solid white;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$28.47</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Pahlava</span>
                    <img class="shop-item-image" src="Images/Medovaya-armyanskaya-pahlava.jpg" style="border-radius:50%;border:3px solid;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$30.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Tiramisu</span>
                    <img class="shop-item-image" src="Images/The-Easiest-Eggless-Tiramisu-14-720x720.jpg" style="border-radius:50%;border:3px solid;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$24.05</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				  <div class="shop-item">
                    <span class="shop-item-title">Chocolate cake</span>
                    <img class="shop-item-image" src="Images/Chocolate-cake-recipe-1200a.jpg" style="border-radius:50%;border:3px solid;">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$18.74</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
			<div id="ppay">
<div id="makePayment">
<div class="cards">
<form method="POST" action="{{route('add-cards')}}">
@csrf
<div class="text1">
<h1 class="detail">Credit Card Details</h1>

<input type="text" placeholder="Name" class="inp" name="name"/>
<input type="text" placeholder="Card Number" class="inp" name="cardNumber"/></br>
<input type="text" placeholder="MM" disabled class="inp2"/>
<select class="sel">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
<input type="text" placeholder="YYYY" disabled class="inp2"/>
<select class="sel">
<option>2021</option>
<option>2022</option>
<option>2023</option>
</select>
<input type="text" placeholder="CSV" class="csv"/></br>
<input type="text" placeholder="Address" class="inp3" name="address"/>
  <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="submit">PURCHASE</button>

</div>
</form>
</div>
</div>
</div>

        </section>

    </body>
</html>
