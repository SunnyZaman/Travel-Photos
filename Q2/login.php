<?php
session_start();
$errorMsg = "";
$validUser = false;
if(isset($_SESSION['login'])){
    $validUser = true;
 } 
if (isset($_POST["sub"])) {
    $validUser = $_POST["username"] == "admin" && $_POST["password"] == "password";
    if (!$validUser) $errorMsg = "Invalid username or password.";
    else $_SESSION["login"] = true;
}
if ($validUser) {
    header("Location: /admin.php");
    die();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <section class="section">

        <div class="container">
            <div class="columns">
                <div class="column">
                    <div></div>
                </div>
                <div class="column">
                    <div>
                    <form name="input" action="" method="post">
                        <div class="field">
                            
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="text" placeholder="username" name="username" value="">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                    <i class="fas fa-check"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="password" placeholder="Password" name="password" value="">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <button class="button is-success" type="submit" name="sub">
                                    Login
                                </button>
                                
                            </p>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="column">
                    <div></div>
                </div>

            </div>
            </p>
        </div>
    </section>

</body>

</html>