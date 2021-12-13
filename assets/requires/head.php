<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"><?php
# Get value from setup.json
$file = __DIR__."\..\..\json\setup.json";
$fileContent = file_get_contents($file);
$setup = json_decode($fileContent, true);

# Get user from user.json
$userFile = __DIR__."\..\..\json\user.json";
$userFileContent = file_get_contents($userFile);
$user = json_decode($userFileContent, true);

echo "<title>" . $setup["title"] . "</title>";
echo '<link rel="stylesheet" href="'.$path.'assets/css/main.css"/>';
echo '<link rel="icon" href="'.$path.'assets/images/logo/logo-background-solid.png" type="image/x-icon"/>';
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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