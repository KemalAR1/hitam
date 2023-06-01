<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/form.css" type="text/css" />
    <link 
    href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Roboto+Condensed&display=swap" 
    rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="action.php?action=insert_user" method="post">
        <div class="wrapper">
            <div class="title"> FORM REGISTER </div>
                <div class="form">
                <input type="hidden" name="role" value="user">
                <div class="inputfield">
                    <i class="icon fa-solid fa-user"></i>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="input" placeholder="Masukan Nama" required>
                </div>  
                <div class="inputfield">
                    <i class="icon fa-solid fa-at"></i>
                    <input type="email" name="email" class="input" id="email" placeholder="Masukan Email" required>
                </div>  
                <div class="inputfield">
                    <i class="icon fa-solid fa-lock"></i>
                    <input type="password" name="password" id="password" class="input" placeholder="Masukan Password" required>
                </div>  
                <div class="inputfield">
                    <i class="icon fa-solid fa-check"></i>
                    <input type="password" name="password-repeat" id="password-repeat" placeholder="Konfirm Password" class="input" required>
                </div> 
                <div class="inputfield terms">
                    <p>Sudah Punya Akun? <a class="link" href="login_form.php">Login</a></p>
                </div> 
                <div class="inputfield">
                    <input type="submit" value="Register" class="btn">
                </div>
            </div>
        </div>
    </form>
</body>
</html>