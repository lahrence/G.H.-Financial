<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $path = "../";
        require("../assets/requires/head.php");
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
                        <h4>Your Dashboard</h4>
                    </div>
                </section>
                <div class="card-group-third">
                    <?php
                        $file = __DIR__."\..\json\account.json";
                        $fileContent = file_get_contents($file);
                        $accounts = json_decode($fileContent, true);
                        foreach($accounts as $account) {
                            echo '<section class="card-third card-accounts card-hover" style="height: 200px">';
                            echo '<div class="card-accounts-text">';
                            echo '<p>'.$account["name"].'</p>';
                            echo '<h1>'.$setup["currencySymbol"].number_format($account["amount"], 2, '.', ',').'</h1>';
                            echo '<p>'.$setup["currency"].'</p>';
                            echo '<a>Activities</a>';
                            echo '</div>';
                            echo '</section>';
                        }
                    ?>
                </div>
                <div class="card-group-two-thrid-sb">
                    <section>
                        
                    </section>
                    <section class="history">
                        <table class="history-table">
                            <tbody>
                                <tr>
                                    <th scope='col'>Account</th>
                                    <th scope='col'>Description</th>
                                    <th scope='col'>Amount</th>
                                    <th scope='col'>Date</th>
                                </tr>
                                <?php
                                $file = __DIR__."\..\json\history.json";
                                $fileContent = file_get_contents($file);
                                $transactions = json_decode($fileContent, true);
                                foreach($transactions as $transaction) {
                                    $date = $transaction["date"].$transaction["year"];
                                    $time = strtotime($date);
                                    $newTime = date("d-m-Y", $time);
                                    $negative = $transaction["amount"] < 0;
                                    $amountColor = "";
                                    if ($negative) {
                                        $amountColor = "negative";
                                    } else {
                                        $amountColor = "positive";
                                    };
                                    echo "<tr>";
                                    echo "<th>".$transaction["accountNum"]."</th>";
                                    echo "<td>".$transaction["desc"]."</td>";
                                    echo "<td class='{$amountColor}'><span class='amount'>".number_format((float)$transaction["amount"], 2, '.', ' ')."</span></td>";
                                    echo "<td>".$newTime."</td>";
                                    echo "</tr>";
                                };
                                ?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
        <?php
            require("../assets/requires/footer.php");
        ?>
    </body>
</html>