<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $path = "";
        $css = "home";
        $title = "";
        $isRoot = true;
        require("assets/requires/head.php");
        ?>
</head>

<body>
    <?php
        require("assets/requires/nav.php");
        ?>
    <div class="home">
        <div class="home-content">
            <section id="main-banner" class="banner-section">
                <div class="image-container">
                    <img id="lagger" src="assets/images/textures/pexels-olly-3777559.jpg" />
                </div>
                <div class="new-banner-section-container">
                    <div class=" section-container floating">
                        <div class="section-container-text-container">
                            <h4>Reports of scams have been<br>increasing. Don't answer calls<br>that you don't
                                recognize.
                            </h4>
                            <a href="https://www.google.com/search?q=report+a+tech+support+scam">Report a scam</a>
                        </div>
                    </div>
                    <div class="section-container floating left-edge">
                        <div class="section-container-text-container-second">
                            <h1>Online Banking</h1>
                            <a class="underline" href="<?php echo $isLoggedInUrl;?>">Log in</a>
                            <br>
                            <br>
                            <h1>Online Trading</h1>
                            <a>Log in</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="accounts-banner">
                <h2>Welcome to Gull le Belle Banking</h2>
                <p>Stability you can believe in.</p>
                <p>Explore our account options</p>
                <ul class="offers">
                    <li><img />Savings</li>
                    <li><img />Checking</li>
                    <li><img />Competitive Rates</li>
                    <li><img />Savings</li>
                    <li><img />Savings</li>
                    <li><img />Savings</li>
                </ul>
            </section>
        </div>
    </div>
    <?php
            require("assets/requires/footer.php");
        ?>
</body>

</html>