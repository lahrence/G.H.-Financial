<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $path = "../";
        $css = "main";
        $title = "Settings | ";
        $isRoot = false;
        require("../assets/requires/head.php");
        if (!$user["isLoggedIn"] and $setup["loginCheck"]) {
            header("Location: ../index.php?error=notloggedin");
        }
        $file = __DIR__."\..\json\history.json";
        $fileContent = file_get_contents($file);
        $transactions = json_decode($fileContent, true);
        $length = count($transactions);
        $maxPage = ceil($length/18);
        $buttonRange = 2;

        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        if ($page > $maxPage) {
            header("Location: index.php?page=".$maxPage);
        }
        else if ($page <= 0) {
            header("Location: index.php?page=1");
        }
        $pageIndex = empty($_GET['page']) ? 0 : $_GET['page'] - 1;
        ?>
    </head>
    <body>
        <div class="content">
            <?php
                require("../assets/requires/nav.php");
            ?>
            <div class="content-div dashboard">
                <section class="header">
                    <div class="header-text">
                        <?php
                            echo '<p>Welcome back, '.$user["fName"].'.</p>';
                        ?>
                        <h4>Settings</h4>
                    </div>
                </section>
                <div class="card-group-half">
                    <section class="history card-full-fixed">
                        <div class="settings-form">
                            <form action="../assets/includes/submit-setup.php" method="post">
                                <h1>Site Preferences</h1>
                                <p>Currency</p>
                                <div class="input-text-container">
                                    <br>
                                    <input input="text" name="currency" class="container input-text"
                                    value="<?php echo $setup["currency"];?>">
                                </div>

                                <br>
                                <p>Currency Notation</p>
                                <div class="input-text-container">
                                    <br>
                                    <input input="text" name="currencySymbol" class="container input-text"
                                    value="<?php echo $setup["currencySymbol"];?>">
                                </div>

                                <br>
                                <p>Title</p>
                                <div class="input-text-container">
                                    <br>
                                    <input input="text" name="title" class="container input-text"
                                    value="<?php echo $setup["title"];?>">
                                </div>

                                <br>
                                <p>Footer Text</p>
                                <div class="input-text-container">
                                    <br>
                                    <input input="text" name="footerText" class="container input-text"
                                    value="<?php echo $setup["footerText"];?>">
                                </div>

                                <br>
                                <p>Border Radius</p>
                                <div class="input-text-container">
                                    <br>
                                    <input input="text" name="borderRadius" class="container input-text"
                                    value="<?php echo $setup["borderRadius"];?>">
                                </div>

                                <br>
                                <p>Check Log In</p>
                                <label class="container">
                                    <input type="checkbox" name="loginCheck" <?php
                                    $loginCheck = "";
                                    if ($setup["loginCheck"]) {
                                        $loginCheck = "checked";
                                    }

                                    echo $loginCheck;?>>Check if user is logged in (for debugging).
                                    <span class="checkmark"></span>
                                </label>

                                <br>
                                <p>Dark Theme</p>
                                <label class="container">Toggle dark mode for the website.
                                    <input type="checkbox" name="darkMode" <?php
                                    $darkMode = "";
                                    if ($setup["darkMode"]) {
                                        $darkMode = "checked";
                                    }

                                    echo $darkMode;?>>
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit">Submit</button>

                            </form>
                        </div>
                    </section>
                    <section class="history card-full-fixed">
                        <div class="settings-form">
                            <form action="../assets/includes/submit-setup.php" method="post">
                                <h1>Site Preferences</h1>
                                <p>Currency</p>
                                <div class="input-text-container">
                                    <br>
                                    <input input="text" name="currency" class="container input-text"
                                    value="<?php echo $setup["currency"];?>">
                                </div>

                                <br>
                                <p>Currency Notation</p>
                                <div class="input-text-container">
                                    <br>
                                    <input input="text" name="currencySymbol" class="container input-text"
                                    value="<?php echo $setup["currencySymbol"];?>">
                                </div>

                                <br>
                                <p>Title</p>
                                <div class="input-text-container">
                                    <br>
                                    <input input="text" name="title" class="container input-text"
                                    value="<?php echo $setup["title"];?>">
                                </div>

                                <br>
                                <p>Footer Text</p>
                                <div class="input-text-container">
                                    <br>
                                    <input input="text" name="footerText" class="container input-text"
                                    value="<?php echo $setup["footerText"];?>">
                                </div>

                                <br>
                                <p>Border Radius</p>
                                <div class="input-text-container">
                                    <br>
                                    <input input="text" name="borderRadius" class="container input-text"
                                    value="<?php echo $setup["borderRadius"];?>">
                                </div>

                                <br>
                                <p>Check Log In</p>
                                <label class="container">
                                    <input type="checkbox" name="loginCheck" <?php
                                    $loginCheck = "";
                                    if ($setup["loginCheck"]) {
                                        $loginCheck = "checked";
                                    }

                                    echo $loginCheck;?>>Check if user is logged in (for debugging).
                                    <span class="checkmark"></span>
                                </label>

                                <br>
                                <p>Dark Theme</p>
                                <label class="container">Toggle dark mode for the website.
                                    <input type="checkbox" name="darkMode" <?php
                                    $darkMode = "";
                                    if ($setup["darkMode"]) {
                                        $darkMode = "checked";
                                    }

                                    echo $darkMode;?>>
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit">Submit</button>

                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <?php
            require("../assets/requires/footer.php");
        ?>
    </body>
</html>