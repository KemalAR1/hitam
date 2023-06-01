<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="css/shopping.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <label class="logo">ShirtStore</label>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="shopping.php">Shopping</a></li>
                <li><a href="database/login_form.php" target="_blank">Log In</a></li>
                <li><a href="database/form_register.php" target="_blank">Register</a></li>
            </ul>
        </nav>
    </header>
    <!-- <div class="cart">
        <h2 class="cart-title">Your Cart</h2>

        <div class="cart-content">

            <div class="cart-box">
                <img src="img/2.PNG" alt="fullo" class="cart-img">
                <div class="detail-box">
                    <div class="cart-product-title">Fullo's</div>
                    <div class="cart-price">Rp 85.000</div>
                    <input type="number" value="1" class="cart-quantity">
                </div>

                <i class="cart-remove fa-solid fa-trash-can"></i>
            </div>
        </div>

        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">Rp 0</div>
        </div>

        <button type="button" class="btn-buy">Buy</button>
        <i class="fa-solid fa-x" id="close-cart"></i>
    </div> -->

    <!-- Section -->

    <section class="shop container">
        <h2 class="section-title">Clothes Products</h2>
        <div class="shop-content">
            <!-- Product 1 -->
            <div class="product-box">
                <a class="link" href="products/baju1.php">
                <img src="img/1.jpeg" alt="baju css" class="product-img"></a>
                <h2 class="product-title">CSS SHIRT</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 75.000</span>
            </div>
            <!-- Product 2 -->
            <div class="product-box">
                <a class="link" href="products/baju2.php">
                <img src="img/2.png" alt="baju fullo's" class="product-img"></a>
                <h2 class="product-title">FULLO'S SHIRT</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 85.000</span>
            </div>
            <!-- Product 3 -->
            <div class="product-box">
                <a class="link" href="products/baju3.php">
                <img src="img/3.jpg" alt="baju css to my html" class="product-img"></a>
                <h2 class="product-title">CSS TO MY HTML</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 139.000</span>
            </div>
            <!-- Product 4 -->
            <div class="product-box">
                <a class="link" href="products/baju4.php">
                <img src="img/4.jpg" alt="Morwick Tshirt Kaos Pria Paradox Putih" class="product-img"></a>
                <h2 class="product-title">Morwick Tshirt Kaos Pria Paradox Putih</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 84.000</span>
            </div>
            <!-- Product 5 -->
            <div class="product-box">
                <a class="link" href="products/baju5.php">
                <img src="img/5.png" alt="baju honkai impact" class="product-img"></a>
                <h2 class="product-title">HONKAI IMPACT JACKET</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 1.500.000</span>
            </div>
            <!-- Product 6 -->
            <div class="product-box">
                <a class="link" href="products/baju6.php">
                <img src="img/6.jpg" alt="baju vsc" class="product-img"></a>
                <h2 class="product-title">VSC SHIRT</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 120.000</span>
            </div>
            <!-- Product 7 -->
            <div class="product-box">
                <a class="link" href="products/baju7.php">
                <img src="img/7.png" alt="baju koko" class="product-img"></a>
                <h2 class="product-title">KOKO SHIRT</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 85.000</span>
            </div>
            <!-- Product 8 -->
            <div class="product-box">
                <a class="link" href="products/baju8.php">
                <img src="img/8.jpg" alt="baju batik" class="product-img"></a>
                <h2 class="product-title">Baju Batik Pria Danar Hadi Solo Motif	</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 190.000</span>
            </div>
            <!-- Product 9 -->
            <div class="product-box">
                <a class="link" href="products/baju9.php">
                <img src="img/9.jpg" alt="baju planet" class="product-img"></a>
                <h2 class="product-title">BLUE PLANET</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 96.000</span>
            </div>
            <!-- Product 10 -->
            <div class="product-box">
                <a class="link" href="products/baju10.php">
                <img src="img/10.jpg" alt="baju FF" class="product-img"></a>
                <h2 class="product-title">FREE FIRE ALOK</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 90.000</span>
            </div>
            <!-- Product 11 -->
            <div class="product-box">
                <a class="link" href="products/baju11.php">
                <img src="img/11.jpg" alt="baju luffy" class="product-img"></a>
                <h2 class="product-title">One Piece Luffy</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 24.811</span>
            </div>
            <!-- Product 12 -->
            <div class="product-box">
                <a class="link" href="products/baju12.php">
                <img src="img/12.png" alt="hoodie fullo" class="product-img"></a>
                <h2 class="product-title">HOODIE FULLO</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 100.000</span>
            </div>
            <!-- Product 13 -->
            <div class="product-box">
                <a class="link" href="products/baju13.php">
                <img src="img/13.png" alt="Jessey Fullo" class="product-img"></a>
                <h2 class="product-title">JERSEY FULLO</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 90.000</span>
            </div>
            <!-- Product 14 -->
            <div class="product-box">
                <a class="link" href="products/baju14.php">
                <img src="img/14.png" alt="baju gamis" class="product-img"></a>
                <h2 class="product-title">VM Gamis Panjang Baju Koko Pria</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 135.000</span>
            </div>
            <!-- Product 15 -->
            <div class="product-box">
                <a class="link" href="products/baju15.php">
                <img src="img/15.jpg" alt="Jersey" class="product-img"></a>
                <h2 class="product-title">Jersey Manchester City</h2>
                <i class="add-cart fa-solid fa-cart-shopping"></i>
                <span class="price">Rp 200.000</span>
            </div>
        </div>
    </section>
</body>
</html>