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
                        // echoes balances of each accounts from account.json as cards
                        
                        for ($i = 0; $i <= 2; $i+=1) {
                            echo '<section class="card-third card-accounts card-hover" style="height: 200px">';
                            echo '<div class="card-accounts-text">';
                            echo '<p>'.$accounts[$i]["name"].'</p>';
                            echo '<h1>'.$setup["currencySymbol"].number_format($accounts[$i]["amount"], 2, '.', ',').'</h1>';
                            echo '<p>'.$setup["currency"].'</p>';
                            echo '<a href="../activities" style="text-decoration:none;">Activities</a>';
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
                                    <th scope='col'>Deposit</th>
                                    <th scope='col'>Withdrawal</th>
                                    <th scope='col'>Date</th>
                                </tr>
                                <?php
                                $file = __DIR__."\..\json\history.json";
                                $fileContent = file_get_contents($file);
                                $transactions = json_decode($fileContent, true);
                                for ($i = 0; $i <= 8; $i+=1) {
                                    if (array_key_exists($i,    $transactions)) {
                                        $date = $transactions[$i]["date"].$transactions[$i]["year"];
                                        $time = strtotime($date);
                                        $newTime = date("d-m-Y", $time);
                                        $negative = $transactions[$i]["amount"] < 0;
                                        $amountColor = "";
                                        $withdraw = $negative ? $setup["currencySymbol"].number_format((float)abs($transactions[$i]["amount"]), 2, '.', ',') : ' ';
                                        $deposit = $negative ? ' ' : $setup["currencySymbol"].number_format((float)abs($transactions[$i]["amount"]), 2, '.', ',');
                                        echo '<tr>';
                                        echo '<th>'.$transactions[$i]["accountNum"].'</th>';
                                        echo '<td>'.$transactions[$i]["desc"].'</td>';
                                        echo '<td>'.$deposit.'</td>';
                                        echo '<td>'.$withdraw.'</td>';
                                        echo '<td>'.$newTime.'</td>';
                                        echo '</tr>';
                                    }
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