<?php

session_start(); /* Starts the session */

// if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
//   header("Location: /login.php");
//     exit;
// }

if (isset($_POST["logout"])) {
    header('Location: logout.php');
    die();
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plan Your Travel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <?php
include('travel-data-class.php');

?>
</head>


<body>
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <!-- <a class="navbar-item" href="https://versions.bulma.io/0.7.0">
                <img src="https://versions.bulma.io/0.7.0/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
            </a> -->
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="admin.php">
                    Plan Your Travel
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
    <div class="container">
    <div class="columns">
                    <div class="column is-5 left">
                    <div class="field">
                            <label class="label">Choose Popular Place:</label>
                            <div class="select is-fullwidth">
                                <select id="popularPlaces">
                                    <option value="0" disabled selected hidden></option>
                                    <option value="0">CN Tower</option>
                                    <option value="1">Eiffel Tower</option>
                                    <option value="2">Great Sphinx of Giza</option>
                                    <option value="3">Leaning Tower of Pisa</option>
                                    <option value="4">Taj Mahal</option>
                                </select>
                            </div>
                        </div>
                     </div>
                 </div>
</div>
<div class="has-text-centered" style="margin-top:10px;">
<div id="container"></div>
</div>
<script>
 $(document).ready(function(){
var imagesArr =[
	"images/cntower1.jpg",
	"images/eiffel1.jpg",
	"images/sphinx1.jpg",
	"images/pisa1.jpg",	
    "images/tajMahal1.JPG",	
	];
var namesArr =[
	'<?php echo "$images[0]"?>',
	'<?php echo "$images[1]"?>',
	'<?php echo "$images[2]"?>',
	'<?php echo "$images[3]"?>',
	'<?php echo "$images[4]"?>',
	];
$('#popularPlaces').change(function(){
    $('#container').html("");
    $('#container').append(namesArr[this.value]);
  });
 });
</script>
    <!-- <form name="input" action="" method="post">
        <input type="submit" name="logout" value="logout" />
    </form> -->
</body>

</html>