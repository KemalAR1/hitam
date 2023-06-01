<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo">ShirtStore</label>
        <ul>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="shopping.php">Shopping</a></li>
        </ul>

        <?php if(isset($_SESSION['status'])):?>

            <?php if($_SESSION['role'] === 'admin'): ?>
                <a href="#">Dashboard Admin</a>

            <?php elseif($_SESSION['role'] === 'operator'): ?>
                <a href="#">Dashboard Operator</a>

            <?php endif;?>

            <div class="profile">
                <button class="profile-button">
                    <img class="profile-image" src="img/2.PNG" alt="PP">
                    <span class="arrow-down"></span>
                </button>
                <div class="dropdown-content">
                    <div class="sign_info">
                        <p>Signed is as</p>
                        <p class="fullname"><?= $_SESSION['name'] ?></p>
                    </div>

                    <a class="dropdown" href="#">My Profile</a>
                    <a class="dropdown" href="#">Edit Profile</a>
                    <a class="dropdown" href="#">Settings</a>
                    <a class="dropdown" href="#">Help</a>
                    <a class="dropdown" href="#">Help</a>

                    <?php if ($_SESSION['role'] === 'admin') : ?>
                        <a class="dropdown" href="#">Dashboard Admin</a>
                    <?php elseif ($_SESSION['role'] === 'operator') : ?>
                        <a class="dropdown" href="#">Dashboard Operator</a>
                    <?php endif; ?>
                    <a class="dropdown" href="database/logout.php">Log Out</a>
                </div>
            </div>

            <?php else: ?>
                <div class="login_wrapper">
                    <a href="database/login_form.php" class="login-text">Log In</a>
                    <a href="database/form_register.php" class="login-text">Register</a>
                </div>
            <?php endif; ?>
    </nav>

    <section class="main-home">
        <div class="main-text">
            <h5>Switch up your style!</h5>
            <h1>New Fullo's <br>Shirt</h1>
            <p>There's Nothing Like Trend!</p>
            <i class="add-cart fa-solid fa-cart-shopping"></i>
            <a href="shopping.php" class="main-btn">Shop Now </a>
        </div>
            <!-- <img src="img/2.PNG" alt="fullo" class="main-img"> -->
    </section>


    <script src="script.js"></script>
</body>
</html>