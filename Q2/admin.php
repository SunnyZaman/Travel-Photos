<?php

session_start(); /* Starts the session */

// if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
//   header("Location: /login.php");
//     exit;
// }

if (isset($_POST["logout"])) {
    header('Location: /logout.php');
    die();
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>


<body>
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://versions.bulma.io/0.7.0">
                <img src="https://versions.bulma.io/0.7.0/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="https://versions.bulma.io/0.7.0/">
                    Home
                </a>
                
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                    <!-- <button class="button is-outlined" href="https://versions.bulma.io/0.7.0/">
                    Profile
                    </button> -->
                    <form name="input" action="" method="post">
                        <p class="control">
                            <button class="button is-outlined" type="submit" name="logout">
                                Logout
                            </button>
                        </p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- <form name="input" action="" method="post">
        <input type="submit" name="logout" value="logout" />
    </form> -->
</body>

</html>