<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $path = "../";
        $css = "home";
        $title = "Log In | ";
        $isRoot = true;
        require("../assets/requires/head.php");
        ?>
    </head>
    <body>
        <?php
        require("../assets/requires/nav.php");
        ?>
        <div class="log-in-content">
            <?php
                require("../assets/requires/nav.php");
            ?>
            <div class="content-div dashboard log-in-content-div">
                <section class="card-full log-in-form-card">
                    <div class="settings-form log-in-form">
                        <form action="../assets/includes/login.php" method="post">
                            <h1>Log In</h1>
                            <?php 
                                if (isset($_GET["error"])){
                                    $error = $_GET["error"];
                                    if ($error == 'notloggedin') {
                                        echo '<p><span class="error">you are not logged in</span></p>';
                                    }
                                }
                            ?>

                            <br>
                            <p>Access Card or Username<?php 
                                if (isset($_GET["error"])){
                                    $error = $_GET["error"];
                                    if ($error == 'emptyfieldusr') {
                                        echo '<span class="error"> (don\'t leave this field empty)</span>';
                                    } else if ($error == 'invalidusr'){
                                        echo '<span class="error"> (this user does not exist)</span>';
                                    }
                                }
                            ?></p>
                            <div class="input-text-container">
                                <br>
                                <input input="number" name="username" class="container input-text"
                                value="<?php
                                    if (isset($_GET["usr"])){
                                        echo $_GET["usr"];
                                    }
                                ?>">
                            </div>

                            <br>
                            <p>Password<?php 
                                if (isset($_GET["error"])){
                                    $error = $_GET["error"];
                                    if ($error == 'emptyfieldpwd') {
                                        echo '<span class="error"> (don\'t leave this field empty)</span>';
                                    } else if ($error == 'invalidpwd'){
                                        echo '<span class="error"> (password does not match)</span>';
                                    }
                                }
                            ?></p>
                            <div class="input-text-container">
                                <br>
                                <input type="password" input="text" name="password" id="password" class="container input-text password">
                                <span class="bi bi-eye-slash" id="togglePassword" for="password" onclick="pwdReveal(this)"></span>
                            </div>
                            <button type="submit">Log In</button>
                            <p><a href="../assets/includes/password.php">Forgot your password?</a></p>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <?php
            require("../assets/requires/footer.php");
        ?>
    </body>
</html>