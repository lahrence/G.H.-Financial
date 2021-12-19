<?php
$navTitle = $setup["title"] == 'Gull le Belle' ? 'Gull <span class="stylized">le</span> Belle' : $setup["title"];
$isLoggedInText = $user["isLoggedIn"] ? 'Dashboard' : 'Login';
$isLoggedInUrl = $user["isLoggedIn"] ? 'dashboard/' : 'log-in/';
if (!$isRoot) {
    echo '<div class="content-div navbar">
        <input id="menu-btn" type="checkbox">
        <label class="menu-icon" for="menu-btn"><span id="icon-span" class="material-icons expand-icon">expand_more</span></label>
        <ul class="navbar-content">
            <a class="navbar-title" href="../"><p class="navbar-content-text"><img src="'.$path.'assets/images/logo/logo-background-transparent.png" width="40px"/>'.$navTitle.'</p></a>
            <a href="'.$path.'dashboard/"><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">dashboard</span>DASHBOARD</span></a>
            <a href="'.$path.'activities/"><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">list</span>ACTIVITIES</span></a>
            <a><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">sync_alt</span>TRANSFER</span></a>
            <span class="navbar-content-break"></span>
            <a href="'.$path.'settings/"><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">settings</span>SETTINGS</span></a>
            <a><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">help</span>HELP</span></a>
            <a href="'.$path.'assets/includes/logout.php"><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">logout</span>LOG OUT</span></a>
        </ul>
    </div>';
} else {
    echo '
    <header>
        <nav>
            <div class="nav-top">
                <ul>
                    <li><a>Personal</a></li>
                    <li><a>Small Business</a></li>
                    <li><a>Commercial</a></li>
                    <li><a>Investing</a></li>
                    <li><a>About '.$setup["abbreviation"].'</a></li>
                </ul>
                <ul class="nav-top-right">
                    <li><a>English</a></li>
                </ul>
            </div>
            <div class="nav-bottom">
                <ul>
                    <li><a href="'.$path.'"><img src="'.$path.'assets/images/logo/logo-background.png"/></a></li>
                    <li><a>Accounts</a></li>
                    <li><a>How To</a></li>
                    <li><a>Products</a></li>
                    <li><a>Solutions</a></li>
                </ul>
                <ul class="nav-bottom-right">
                    <li><a href="'.$path.$isLoggedInUrl.'">'.$isLoggedInText.'</a></li>
                </ul>
            </div>
        </nav>
    </header>
    ';
}
?>