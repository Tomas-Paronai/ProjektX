<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/main.css"> <!-- LOADING MAIN CSS FILE -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if gte IE 9]>
        <style type="text/css">
            .gradient {
                filter: none;
            }
        </style>
    <![endif]-->
</head>
<body>

<!--[if lt IE 9]>
    <p>Do your self a favour <strong>UPDATE YOUR BROWSER!</strong></p>
<![endif]-->

<!-- BEGGINING OF THE PAGE-->
<div id="page-wrapper">

    <!-- BEGGINING OF THE PAGE HEADER-->
    <header id="main-header">

        <!-- BEGGINING OF THE TITLE CONTENT-->
        <div id="title-content">

            <!-- BEGGINING OF THE TITLE-->
            <div id="title">
                <img src="img/default-user.png" class="user-image">
                <h1>Welcome <?php echo "TO DO"; ?></h1>
            </div>
            <!-- ENDING OF THE TITLE-->

            <!-- BEGGINING OF THE SAERCH CONTAINER-->
            <div id="search">

                <!-- BEGGINING OF THE FAQ/HELP BUTTONS-->
                <a href="#" class="faq-help-button">FAQ</a>
                <span>/</span>
                <a href="#" class="faq-help-button">Help</a>
                <!-- ENDING OF THE FAQ/HELP BUTTONS-->

                <!-- BEGGINING OF THE SAERCH BAR-->
                <div class="search-container">
                    <input type="text" name="search" class="search">
                    <button class="search-button"></button>
                </div>
                <!-- ENDING OF THE SAERCH BAR--->

            </div>
            <!-- ENDING OF THE SAERCH CONTAINER-->

        </div>
        <!-- ENDING OF THE TITLE CONTENT-->

        <!-- BEGGINING OF THE MAIN NAVIGATION-->
        <nav id="main-nav">
            <?php
                include "pages/main-nav.php";
            ?>
        </nav>
        <!-- ENDING OF THE MAIN NAVIGATION-->

    </header>
    <!-- ENDING OF THE PAGE HEADER-->

    <!-- BEGGINING OF THE PAGE CONTENT-->
    <div id="content-wrapper">

        <!-- BEGGINING OF SIDE PANEL -->
        <aside id="side-panel">

            <!-- BEGGINING OF LOGIN OF FORM -->
            <div class="frame-container">

                <div class="frame-titlebar">
                    <span class="frame-title">Login</span>
                </div>

                <div class="frame-content login-form">
                    <form action="" method="POST">
                        <ul class="login-container">
                            <li class="login-item"><label for="username">Username:</label></li>
                            <li class="login-item"><input type="text" name="username" placeholder="Username..."></li>
                            <li class="login-item"><label for="username">Password:</label></li>
                            <li class="login-item"><input type="password" name="password" placeholder="Pasword..."></li>
                            <li class="login-item">Do you want to stay logged in ? <input type="checkbox" name="stayLoggedin" value="true"></li>
                            <li class="login-item"><a href="#">Not registered yet ?</a></li>
                            <li class="login-item"><input type="submit" value="Log in"></li>
                        </ul>
                    </form>
                </div>

            </div>
            <!-- ENDING OF LOGIN FORM -->

            <!-- BEGGINING OF EMBEDED VIDEO -->
            <div class="frame-container embeded-video">

                <div class="frame-titlebar">
                    <span class="frame-title">Video</span>
                </div>

                <div class="frame-content">
                    <iframe width="220" height="220" src="https://www.youtube.com/embed/DvOldr9Cjc8" frameborder="0" allowfullscreen></iframe>
                </div>

            </div>
            <!-- ENDING OF EMBEDED VIDEO -->

        </aside>
        <!-- ENDING OF SIDE PANEL -->

        <!-- BEGGINING OF MAIN CONTENT -->
        <main>

            <div class="slider-container">
                <?php
                    include "pages/slider.php";
                ?>
            </div>

            <div class="product-tabs">
            </div>

        </main>
        <!-- ENDING OF MAIN CONTENT -->

    </div>
    <!-- ENDING OF THE PAGE CONTENT-->

    <!-- BEGGINING OF THE PAGE FOOOTER-->
    <footer id="main-footer">
    </footer>
    <!-- ENDING OF THE PAGE FOOTER-->

</div>
<!-- ENDING OF THE PAGE-->

</body>
</html>