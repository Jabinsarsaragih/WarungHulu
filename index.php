<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hulu's store</title>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/acount.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="img/hulu store.png">
                <h1>Hulu's Store</h1>
            </div>
            <div class="account">
                <ul>
                    <li><a href="#" id="login">Login</a></li>
                    <li><a href="#" id="singin">Singin</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section>
        <div class="asideLeft">
            <h3>ONLINE</h3>
            <h1>GROCERY</h1>
            <h1>STORE</h1>
            <p id="typewriter">
            </p>
            <a href="read.php">READ MORE</a>
        </div>
        <div class="asideRight">
            <div class="imgStore">
                <img src="img/toko02.png">
            </div>
        </div>

        <a href="src/home.php">home</a>
    </section>
    <footer>
        <div class="copyright">
            <p>&copy; 2024 Hulu's Store</p>
        </div>
    </footer>

    <!-- Start Login -->
    <div class="login">
        <div class="close">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="loginImg">
            <img src="img/hulu store.png" alt="logo">
            <h1>Hulu's store</h1>
        </div>
        <form action="proseslogin.php" method='POST'>
            <h1>Login</h1>
            <div class="inputGmail">
                <input type="gmail" class='input' name='gmail' id='gmail' required autocomplete="off">
                <label for="gmail" class='label'>Gmail</label>
            </div>
            <div class="inputPassword">
                <input type="password" class='input' name='password' id='password' required autocomplete="off">
                <label for="password" class='label'>Password</label>
            </div>
            <div class="send">
                <input type="submit" name="Login" value="Login">Kirim
            </div>
        </form>
    </div>

    <!-- End Login -->
    <div class="singin">
        <div class="closeSingin">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="singinImg">
            <img src="img/hulu store.png" alt="logo">
            <h1>Hulu's store</h1>
        </div>
        <form action="prosessingin.php" method='POST'>
            <h1>Singin</h1>
            <div class="inputGmail">
                <input type="gmail" class='input' name='gmail' id='gmail' required autocomplete="off">
                <label for="gmail" class='label'>Gmail</label>
            </div>
            <div class="inputPassword">
                <input type="password" class='input' name='password' id='password' required autocomplete="off">
                <label for="password" class='label'>Password</label>
            </div>
            <div class="send">
                <input type="submit" name="Login" value="Login">Kirim
            </div>
        </form>
    </div>

    <script src='js/acount.js'></script>
</body>

</html>