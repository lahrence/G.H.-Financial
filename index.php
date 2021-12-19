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
                <section>
                    <div class="image-container"><img src="assets/images/textures/stock-bank-long.jpg"/></div>
                    <div class="section-container floating floating-background">
                        <h1>
                            Please<br>
                            stay<br>
                            wary<br>
                            of potential<br>
                            scams.
                        </h1>
                    </div>
                    <div class="section-container floating">
                        <div class="section-container-text-container">
                            <h4>Reports of scams have been<br>increasing. Don't answer calls<br>that you don't recognize.</h4>
                            <a>Report a scam</a>
                        </div>
                    </div>
                    <div class="section-container floating left-edge">
                        <div class="section-container-text-container-second">
                            <h1>Online Banking</h1>
                            <a class="underline" href="log-in/">Log in</a>
                            <br>
                            <br>
                            <h1>Online Trading</h1>
                            <a>Log in</a>
                        </div>
                    </div>
                </section>
                <section>
                </section>
            </div>
        </div>
        <?php
            require("assets/requires/footer.php");
        ?>
    </body>
</html>