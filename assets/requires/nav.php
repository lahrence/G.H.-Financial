<?php
$navTitle = $setup["title"] == 'Gull le Belle' ? 'Gull <span class="stylized">le</span> Belle' : $setup["title"];
echo '<div class="content-div navbar">
    <input id="menu-btn" type="checkbox">
    <label class="menu-icon" for="menu-btn"><span id="icon-span" class="material-icons expand-icon">expand_more</span></label>
    <ul class="navbar-content">
        <a class="navbar-title">
        <p class="navbar-content-text"><img src="../assets/images/logo/logo-background-transparent.png" width="40px"/>'.$navTitle.'</p></a>
        <a href="../dashboard/"><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">dashboard</span>DASHBOARD</span></a>
        <a href="../activities/"><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">list</span>ACTIVITIES</span></a>
        <a><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">sync_alt</span>TRANSFER</span></a>
        <span class="navbar-content-break"></span>
        <a><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">settings</span>SETTINGS</span></a>
        <a><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">help</span>HELP</span></a>
        <a><span class="navbar-content-text"><span class="material-icons" style="vertical-align: middle; margin-right: 30px;">logout</span>LOG OUT</span></a>
    </ul>
</div>';
?>