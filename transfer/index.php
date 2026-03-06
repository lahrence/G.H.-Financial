<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $path = "../";
        $css = "main";
        $title = "Transfer | ";
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
                    <h4>Make a transfer</h4>
                </div>
            </section>
            <section class="history card-full">
                <div class="table-card table-card-height">
                </div>
            </section>
        </div>
    </div>
    <?php
            require("../assets/requires/footer.php");
        ?>
</body>

</html>