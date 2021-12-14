<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $path = "../";
        $css = "main";
        $title = "Activities | ";
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
                        <h4>Your Activities</h4>
                    </div>
                </section>
                <section class="history card-full">
                    <table class="history-table activities-table">
                        <tbody>
                            <tr>
                                <th scope='col'>Account</th>
                                <th scope='col'>Description</th>
                                <th scope='col'>Deposit</th>
                                <th scope='col'>Withdrawal</th>
                                <th scope='col'>Date</th>
                            </tr>
                            <?php
                            for ($i = 0; $i <= 17; $i+=1) {
                                $j = $i + 18 * $pageIndex;
                                if (array_key_exists($j, $transactions)) {
                                    $date = $transactions[$j]["date"].$transactions[$j]["year"];
                                    $time = strtotime($date);
                                    $newTime = date("d-m-Y", $time);
                                    $negative = $transactions[$j]["amount"] < 0;
                                    $amountColor = "";
                                    $withdraw = $negative ? $setup["currencySymbol"].number_format((float)abs($transactions[$j]["amount"]), 2, '.', ',') : ' ';
                                    $deposit = $negative ? ' ' : $setup["currencySymbol"].number_format((float)abs($transactions[$j]["amount"]), 2, '.', ',');
                                    echo '<tr>';
                                    echo '<th>'.$transactions[$j]["accountNum"].'</th>';
                                    echo '<td>'.$transactions[$j]["desc"].'</td>';
                                    echo '<td>'.$deposit.'</td>';
                                    echo '<td>'.$withdraw.'</td>';
                                    echo '<td>'.$newTime.'</td>';
                                    echo '</tr>';
                                } else {
                                    echo '<tr class="tr-hover-disable">';
                                    echo '<th> </th>';
                                    echo '<td> </td>';
                                    echo '<td> </td>';
                                    echo '<td> </td>';
                                    echo '<td> </td>';
                                    echo '</tr>';
                                }
                            };
                            ?>
                        </tbody>
                    </table>
                </section>
                <section class="header card-footer">
                    <ul class="page-nav">
                        <?php
                            if ($page == 1) {
                                echo '<a class="current">1</a>';
                            } else {
                                echo '<a href="index.php?page=1">1</a>';
                            }
                            if ($page > $buttonRange*2) {
                                echo '<a class="page-nav-gap">&nbsp;</a>';
                            }
                            for ($i = -$buttonRange; $i <= $buttonRange; $i+=1) {
                                $checkPage = $i+$page;
                                if (!($checkPage <= 1) && !($checkPage >= $maxPage)) {
                                    if ($checkPage == $page) {
                                        echo '<a class="current">'.$page.'</a>';
                                    } else {
                                        echo '<a href="index.php?page='.$checkPage.'">'.$checkPage.'</a>';
                                    }
                                }
                            }
                            if ($page <= $maxPage-$buttonRange*2) {
                                echo '<a class="page-nav-gap">&nbsp;</a>';
                            }
                            if ($page == $maxPage) {
                                echo '<a class="current">'.$maxPage.'</a>';
                            } else {
                                echo '<a href="index.php?page='.$maxPage.'">'.$maxPage.'</a>';
                            }
                            
                        ?>
                    </ul>
                </section>
            </div>
        </div>
        <?php
            require("../assets/requires/footer.php");
        ?>
    </body>
</html>