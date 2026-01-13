<?php
include "faviconner.php";
?>
<!DOCTYPE html>
<html lang="en">
<!-- 
you can't stop Yeh Right!
-->
<head>
<title>Random colour - Yeah Right! style</title>
<meta name="description" content="A random colour, nothing more. Based on randomcolour.com (Matt Malin)">
<meta name="author" content="Remco Wessels (remcow@yeahrigh.org)">
<meta name="contributors" content="Matt Malin, Richard Derks, Rineke Engwerda, Peter van der Gulden, Max Stern, Remco Wessels">
<meta property="og:title" content="Random colour" />
<meta property="og:description" content="A random colour. In the RGB range." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://randomcolour.yeahright.org" />
<meta property="og:image" content="https://randomcolour.yeahright.org/<?= $ogImage ?>" />
<meta property="og:image:secure_url" content="https://randomcolour.yeahright.org/<?= $ogImage ?>"" />
<meta property="og:site_name" content="Random colour - Yeah Right! style" />
<?php
echo "<link rel='shortcut icon' type='image/png' href='" . $favicon . "'>";
echo "<style>body {background-color: rgb(" . $color_1 . "," . $color_2 . "," . $color_3 . "); }</style>";
?>
</head>
<body>
</body>
</html>