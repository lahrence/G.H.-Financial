<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"><?php
# Get value from setup.json
$file = __DIR__.'\..\..\json\setup.json';
$fileContent = file_get_contents($file);
$setup = json_decode($fileContent, true);

# Get user from user.json
$userFile = __DIR__.'\..\..\json\user.json';
$userFileContent = file_get_contents($userFile);
$user = json_decode($userFileContent, true);

if (!$setup["darkMode"]) {
    $primaryBG = '#eee';
    $primaryText = '#fff';
    $black = '#202020';
    $blackHover = '#353535';
    $gray = '#20202033';
    $SecondaryText = '#9e9e9e';
} else {
    $primaryBG = '#464646';
    $primaryText = '#202020';
    $black = '#fff';
    $blackHover = '#c0c0c0';
    $gray = '#dadada33';
    $SecondaryText = '#858585';
}

echo '  <style>
            :root {
                --third: calc(100% / 3); /*var(--third)*/
                --two-thirds: calc(100% / 3 * 2); /*var(--two-thirds)*/
                --transition: 0.2s ease-out; /*var(--transition)*/
                --primary-bg: '.$primaryBG.'; /*var(--primary-bg)*/
                --primary-text: '.$primaryText.'; /*var(--primary-text)*/
                --black: '.$black.'; /*var(--black)*/
                --black-hover: '.$blackHover.'; /*var(--black-hover)*/
                --gray: '.$gray.'; /*var(--gray)*/
                --secondary-text: '.$SecondaryText.'; /*var(--secondary-text)*/
                --transparent: #20202000; /*var(--transparent)*/
                --border-radius: '.$setup["borderRadius"].'px;
                --border-radius-double: 10px; /*var(--border-radius-double)*/
                --green: #159c15; /*var(--green)*/
                --menu-primary: #202020;
                --menu-secondary: #fff;
                --menu-hover: #353535;
            }
        </style>';

echo '<title>'.$title.$setup["title"].'</title>';
echo '<link rel="stylesheet" href="'.$path.'assets/css/'.$css.'.css"/>';
echo '<link rel="stylesheet" href="'.$path.'assets/css/input.css"/>';
echo '<link rel="icon" href="'.$path.'assets/images/logo/logo-background-solid.png" type="image/x-icon"/>';
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f1602dd7258dc118bee9c48/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->