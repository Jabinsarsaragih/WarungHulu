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
        <form action="login.php" method='POST'>
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
                <button class="btn-5">
                    <div class="outline"></div>
                    <div class="state state--default">
                        <div class="icon">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g style="filter: url(#shadow)">
                                    <path
                                        d="M14.2199 21.63C13.0399 21.63 11.3699 20.8 10.0499 16.83L9.32988 14.67L7.16988 13.95C3.20988 12.63 2.37988 10.96 2.37988 9.78001C2.37988 8.61001 3.20988 6.93001 7.16988 5.60001L15.6599 2.77001C17.7799 2.06001 19.5499 2.27001 20.6399 3.35001C21.7299 4.43001 21.9399 6.21001 21.2299 8.33001L18.3999 16.82C17.0699 20.8 15.3999 21.63 14.2199 21.63ZM7.63988 7.03001C4.85988 7.96001 3.86988 9.06001 3.86988 9.78001C3.86988 10.5 4.85988 11.6 7.63988 12.52L10.1599 13.36C10.3799 13.43 10.5599 13.61 10.6299 13.83L11.4699 16.35C12.3899 19.13 13.4999 20.12 14.2199 20.12C14.9399 20.12 16.0399 19.13 16.9699 16.35L19.7999 7.86001C20.3099 6.32001 20.2199 5.06001 19.5699 4.41001C18.9199 3.76001 17.6599 3.68001 16.1299 4.19001L7.63988 7.03001Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M10.11 14.4C9.92005 14.4 9.73005 14.33 9.58005 14.18C9.29005 13.89 9.29005 13.41 9.58005 13.12L13.16 9.53C13.45 9.24 13.93 9.24 14.22 9.53C14.51 9.82 14.51 10.3 14.22 10.59L10.64 14.18C10.5 14.33 10.3 14.4 10.11 14.4Z"
                                        fill="currentColor"></path>
                                </g>
                                <defs>
                                    <filter id="shadow">
                                        <fedropshadow dx="0" dy="1" stdDeviation="0.6" flood-opacity="0.5">
                                        </fedropshadow>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p>
                            <span style="--i: 0">S</span>
                            <span style="--i: 1">e</span>
                            <span style="--i: 2">n</span>
                            <span style="--i: 3">d</span>
                        </p>
                    </div>
                    <div class="state state--sent">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="1.5em"
                                width="1.5em" stroke-width="0.5px" stroke="black">
                                <g style="filter: url(#shadow)">
                                    <path fill="currentColor"
                                        d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z">
                                    </path>
                                    <path fill="currentColor"
                                        d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <p>
                            <span style="--i: 5">S</span>
                            <span style="--i: 6">e</span>
                            <span style="--i: 7">n</span>
                            <span style="--i: 8">t</span>
                        </p>
                    </div>
                </button>
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
        <form action="singin.php" method='POST'>
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
                <button class="btn-5">
                    <div class="outline"></div>
                    <div class="state state--default">
                        <div class="icon">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g style="filter: url(#shadow)">
                                    <path
                                        d="M14.2199 21.63C13.0399 21.63 11.3699 20.8 10.0499 16.83L9.32988 14.67L7.16988 13.95C3.20988 12.63 2.37988 10.96 2.37988 9.78001C2.37988 8.61001 3.20988 6.93001 7.16988 5.60001L15.6599 2.77001C17.7799 2.06001 19.5499 2.27001 20.6399 3.35001C21.7299 4.43001 21.9399 6.21001 21.2299 8.33001L18.3999 16.82C17.0699 20.8 15.3999 21.63 14.2199 21.63ZM7.63988 7.03001C4.85988 7.96001 3.86988 9.06001 3.86988 9.78001C3.86988 10.5 4.85988 11.6 7.63988 12.52L10.1599 13.36C10.3799 13.43 10.5599 13.61 10.6299 13.83L11.4699 16.35C12.3899 19.13 13.4999 20.12 14.2199 20.12C14.9399 20.12 16.0399 19.13 16.9699 16.35L19.7999 7.86001C20.3099 6.32001 20.2199 5.06001 19.5699 4.41001C18.9199 3.76001 17.6599 3.68001 16.1299 4.19001L7.63988 7.03001Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M10.11 14.4C9.92005 14.4 9.73005 14.33 9.58005 14.18C9.29005 13.89 9.29005 13.41 9.58005 13.12L13.16 9.53C13.45 9.24 13.93 9.24 14.22 9.53C14.51 9.82 14.51 10.3 14.22 10.59L10.64 14.18C10.5 14.33 10.3 14.4 10.11 14.4Z"
                                        fill="currentColor"></path>
                                </g>
                                <defs>
                                    <filter id="shadow">
                                        <fedropshadow dx="0" dy="1" stdDeviation="0.6" flood-opacity="0.5">
                                        </fedropshadow>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <p>
                            <span style="--i: 0">S</span>
                            <span style="--i: 1">e</span>
                            <span style="--i: 2">n</span>
                            <span style="--i: 3">d</span>
                        </p>
                    </div>
                    <div class="state state--sent">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="1.5em"
                                width="1.5em" stroke-width="0.5px" stroke="black">
                                <g style="filter: url(#shadow)">
                                    <path fill="currentColor"
                                        d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z">
                                    </path>
                                    <path fill="currentColor"
                                        d="M10.5795 15.5801C10.3795 15.5801 10.1895 15.5001 10.0495 15.3601L7.21945 12.5301C6.92945 12.2401 6.92945 11.7601 7.21945 11.4701C7.50945 11.1801 7.98945 11.1801 8.27945 11.4701L10.5795 13.7701L15.7195 8.6301C16.0095 8.3401 16.4895 8.3401 16.7795 8.6301C17.0695 8.9201 17.0695 9.4001 16.7795 9.6901L11.1095 15.3601C10.9695 15.5001 10.7795 15.5801 10.5795 15.5801Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <p>
                            <span style="--i: 5">S</span>
                            <span style="--i: 6">e</span>
                            <span style="--i: 7">n</span>
                            <span style="--i: 8">t</span>
                        </p>
                    </div>
                </button>
            </div>
        </form>
    </div>

    <script src='js/acount.js'></script>
</body>

</html>