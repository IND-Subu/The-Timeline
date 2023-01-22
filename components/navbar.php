<?php 
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
else{
    $username = 'Welcome';
}
if (isset($_SESSION['loggedin'])) {
    $addClass = 'initial';
}
else{
    $addClass = 'hidden';
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>
    <link rel="shortcut icon" href="./src/fav_icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/navbar.css" />
    <script src="/js/font_awesome.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet" />
</head>

<body>
    <!--   Navigation Menu    -->
    <nav>
        <div class="logo">
            <input type="checkbox" name="catag_check" id="catag_check" />
            <label for="catag_check">
                <div id="catagory" class="catagory fas solid fa-bars">
                </div>
            </label><a href="/">Brand</a>
        </div>
        <div class="navmenu">
            <ul>
                <li><a href="/">Top</a></li>
                <li><a href="#">Recent</a></li>
                <li><a href="#">Most Viewed</a></li>
                <li><a href="#">Today's Special</a></li>
                <li><a href="#"><img src="/src/calandar.svg"></a></li>
            </ul>
        </div>
        <div class="profile">
            <i class="fas fa-user"></i>
        </div>
    </nav>

    <header>
        <div class="search_box">
            <form action="/search.php" method="get">
                <input type="search" placeholder="Search" name="search" id="search_bar" />
                <img name="search_btn" id="search_icon" src="/src/search_icon.svg" alt="search" />
            </form>
        </div>
        <!-- Social Media Links -->
        <div class="social_links">
            <ul>    
                <li>
                    <a href="https://facebook.com/subrata.sahoo.7545" target="_blank"><img src="/src/fb.svg"
                            alt="fb" /></a>
                </li>
                <li>
                    <a href="https://twitter.com/subratasahoo922" target="_blank"><img src="/src/twitter.svg"
                            alt="twitter" /></a>
                </li>
                <li>
                    <a href="https://github.com/ind-subu" target="_blank"><img src="/src/linkedin.svg"
                            alt="linkedin" /></a>
                </li>
            </ul>
        </div>
    </header>
    <div class="menu_box_right hidden">
        <div>
            <i class="fas fa-user"></i>
            <li><?php echo $username; ?></li>
            <ul class="<?php echo $addClass;?>">
                <p class="context_menu">Recent</p>
                <p class="context_menu">Drafts</p>
                <p class="context_menu">Add New</p>
            </ul>
            <li> <?php 
                    if (!isset($_SESSION['loggedin'])) {
                        echo '<a href="/login.php">Login</a>';
                    }
                    else{
                        echo '<a href="/logout.php">Log Out</a>';
                    }
            ?></li>
        </div>

    </div>
    <div class="side_bar">
        <div class="menu">
            <div class="item">
                <a class="sub-btn" href="#"><i class="fas fa-desktop"></i>Desktop
                    <!-- <i class="fas fa-angle-right dropdown"></i> -->
                </a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Item 1</a>
                    <a href="#" class="sub-item">Item 2</a>
                    <a href="#" class="sub-item">Item 3</a>
                    <a href="#" class="sub-item">Item 4</a>
                </div>
            </div>
                <div class="item">
                    <a class="sub-btn" href="#">
                    <i class="fas fa-table"></i>Table
                    <!-- <i class="fas fa-angle-right dropdown"></i></a> -->
                <div class="sub-menu">
                    <a href="#" class="sub-item">Item 1</a>
                    <a href="#" class="sub-item">Item 2</a>
                    <a href="#" class="sub-item">Item 3</a>
                    <a href="#" class="sub-item">Item 4</a>
                </div>
            </div>
            <div class="item">
                <a class="sub-btn" href="#">
                    <i class="fas fa-th"></i>Forms
                    <!-- <i class="fas fa-angle-right dropdown angleDown"></i> -->
                </a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Item 1</a>
                    <a href="#" class="sub-item">Item 2</a>
                    <a href="#" class="sub-item">Item 3</a>
                    <a href="#" class="sub-item">Item 4</a>
                </div>
            </div>
            <div class="item">
                <a class="sub-btn" href="#"><i class="fas fa-cogs"></i>Settings
                    <!-- <i class="fas fa-angle-right dropdown"></i> -->
                </a>
            </div>
        </div>
    </div>
    </div>




    <!-- Javascripts for driving into the site..-->
    <script src="/js/jquery.min.js"></script>
    <script>
    $(document).on("scroll", function() {
        if ($(this).scrollTop() > 80) {
            $("nav").addClass("sticky");
        } else {
            $("nav").removeClass("sticky");
        }
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.catagory').click(function() {
            $('.side_bar').toggleClass('slideSidebar');
            if ('.angleDrop') {
                $('.dropdown').removeClass("angleDown");
            } else {
                $('.dropdown').addClass("angleDown");
            }
        });
    });
    </script>
    <!--  Script for menu_box_right -->
    <script>
    $(document).ready(function() {
        $('.profile').click(function() {
            $('.menu_box_right').toggleClass("hidden");
        });
    });
    </script>
</body>

</html>